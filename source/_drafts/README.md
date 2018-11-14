---
title: Problems in Developing WebRTC iOS Demo
date: 2018-09-03
categories: 
tags: 
---

用WebRTC实现iOS端的多方通话

<!---more--->

开发历史

> 2018.09.12 周三

- 开始。

  之前编译有问题。王卫老师重写了一份给我。

  调用SocketRocket库连接到服务器上。连接成功。

> 09.13 周四

- 给服务器发json格式的NSString对象。服务器没有反应。

  每次都是发送了message给服务器之后，才输出WebSocket Connected。

  把发送message放到webSocketDidOpen之后发。成功。

> 09.14 周五

- 初级界面问题。ViewControler里想用Appdelegate的对象。我只能调Appdelegate的方法。

> 09.17 周一

- 调AppDelegate的问题解决了。原来是服务器格式要求json包里有个字母要大写。细心啊！

> 09.18 周二

- 改变核心任务。先打通信令！

- 可以离开房间关闭socket了。最简单的加入和离开可以之后。要做逻辑复杂的PeerConnection和RoomManager了。

> 09.19 周三

- 在AppDelegate中创建Participate对象。将客户端发送和接受用的方法全部在写Appdelegate。

  ViewControler使用时再调用。

- 字典存放Participate类对象

> 09.20 周四

- 今天效率比较高。写代码很顺。对照Kurento的js文件。客户端与服务器交互的信令基本打通。
- 剩下最坑的就是调官方库的时候了。
- 一直接不到participantLeft的信令。找了强哥。看服务器的Java代码。最后发现不建立RTCPeer是不给我发这条信令的。

> 09.25 周二

- 中秋小假归来。今天先看官方Demo: APPRTC。

> 09.26 周三

- Participate类中加入了PeerConnection和ICECandidate。有问题，ICecandidate初始化懵了。脑子有点乱。

> 09.27 周四

- 准备将发送的包从NSString转成NSData，先试一下服务器那边能不能处理NSDate。
  - 失败。发Data就只能发Data。反而费事了。老老实实用String吧。发String只是Dictionary转String稍微多几句。
- 开始研究调用官方库，多次尝试运行报错。

> 09.28 周五

- framework的库不会使用。网上下到一个.a的库，报错

> 10.08 周一

- 国庆归来

- 研究.a静态库的编译，参考这篇文章https://www.jianshu.com/p/2ecb9d846b35

  发现我手上的这份源码好像不支持，在`webrtc_build/webrtc/src/tools_webrtc/ios/build_ios_libs.py `文件的配置选项里没有`static_only`

  开始编译Framework。编译好发现不会导入到工程里用。import不出来。放到子目录里可以`#import "WebRTC.framework/Headers/xxx.h"`，但这样肯定不正宗啊！

> 10.09 周二

- 终于会用WebRTC.framework了。两个要点：

  - 直接把WebRTC.framework拖到Embbded Binaries

  - > `#import "WebRTC/RTCVideoTrack.h" ` 这么引入就可以。——王卫老师

    我折腾了这么多天都知道是这么引用的😂 确实，人家官方的APPRTC demo不就是这样引入的吗？终于可以开工了。

> 10.17 周三

- 调用官方库后参考多个iOS Demo，没有实质进展。

  因为参考Kurento官方的js版代码，核心文件逻辑复杂。

- 今天开始，我也封装一个RTCPeerConnectionClient。

  未来的几天就干这个事。

> 10.25 周四

- 仿写RTCPeerConnectionClient有困难。Android Demo里有的代码不知道对应OC是什么功能。（Java和OC都不会）
- 鼓捣了一周了又开始想仿写官方Demo了。不知道短期的小目标是什么。建立peerConnection的过程要么就是一次性打通，要么就啥也没有，怎么进展呢？

> 10.26 周五

- RTCPari类在我的库里已经没有了。设置Constraints的方法是通过字典

  我暂时把传Constraints的参数的地方全设nil，继续往下开发

> 10.30 周二

- 摄像头获取权限没问题了。模拟器原来不能打开摄像头
- VideoCapturer的类有两个，也没看明白怎么用，准备跳过了

> 10.31 周三

- APPRTC、Android和Kurento三种Demo看的眼花缭乱了。
- 又似是而非地感觉内心有一点点逻辑了。但是仔细想想一下我要怎么继续，又觉得好凌乱。主要是库里的方法不会用啊。很多OC的关键字我并不知道它是什么作用。炸锅。

> 11.1 周四

- 11月 新开始。希望今天一切顺利。

> 11.12 周一

- 思路清晰。配置了ICE Server 而今天的目的就是建SDP Offer
- 配置ICE Server到数组里
- 用iceServer 配置了 rtc Config
- 用 factory 创建peerConnection（ 需要三个参数 config 和 constraint 和 delegate - 完工

> 11.13 周二

- 昨天没找到SDP创建回调函数，今天只能先跳过本地SDP
- 搞了半天，原来昨天配ICE服务器就错了。全局的NSMutableArray要初始化了才能用addobj方法加成员~很尴尬。