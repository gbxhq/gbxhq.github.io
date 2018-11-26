---
title: Problems in StudyingOC
date: 2018-09-05 11:17:28
categories: 
tags: 
---

WebRTC这个项目。我真的对OC一脸懵逼。所以遇到什么白痴的问题都要搜一搜记录了。

- [x] 函数调用问题

  想调用另一个文件里的方法：

  1. 头文件引用

  2. `[[WebRTCHelper文件名 sharedInstance] exitRoom方法名];`

     常用 调Appdelegate:

     `  [(AppDelegate*)[UIApplication sharedApplication].delegate 方法名];`

- [x] .m .h问题

  .h是可以给引用的人看到的那些

- 不能在  .h文件中声明静态实例变量，只能在　.m声明和使用。

- [x] 变量名前的下划线

  _xxx访问的是xxx的地址。
  <http://self.xxx>访问的是xxx的getter。
  这两者并不是完全等价的，<http://self.xxx>是用objc_msgSend发消息，_xxx或者self->xxx则是直接访问内存地址，
  一般建议在init里面用_xxx，其他地方用<http://self.xxx>，为什么呢？避免踩坑

  更多：https://www.zhihu.com/question/26605346

- [ ] `.delegate` 是什么意思？

- [x] Unknown type name `BBB`

  我已经import了BBB的头文件，但是在要创建对象的 A 类里输入 BBB *obj; 还是报错。

  解决：https://blog.csdn.net/fangzhangsc2006/article/details/8049637

  1. 将 import 语句剪切到 *.m 文件中去。
  2. 在 *.h 文件中使用 @class 预声明。

- [x] iOS之property里的copy、strong区别

  https://www.jianshu.com/p/bb3d0c62f5c9

  copy型的数组赋值：

  `rtcConfig.iceServers = [NSArray arrayWithArray:ICEServers];` 一定要用` .` 语法 。`[ ]`是get 。

- [x] 全局NSMutableArray对象不能addObject局部对象

  原来全局数组没有初始化：self.xxx = [NSMutableArray array];//初始化

  xxx = [[NSMutableArray alloc]init] 这样也行