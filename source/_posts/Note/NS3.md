---
title: NS3学习笔记
date: 2019-03-20 09:53:20
categories: Network
tags: NS3
---

要做网络仿真，老师让我搞一搞这个NS3（Network Simulator version 3）。

<!---more--->

# 初探

参考这篇文章。整个过程很清楚了。<https://www.jianshu.com/p/85ed25003e30>

我主要做简要的记录以便自己以后查看。

环境：Ubuntu 18

- 装依赖包的shell文件:  `install.sh`  `-y`自动确认

  ```sh
  #!/bin/sh
  sudo apt-get install gcc g++ python -y
  sudo apt-get install gcc g++ python python-dev -y
  sudo apt-get install mercurial -y
  sudo apt-get install bzr -y
  sudo apt-get install gdb valgrind -y
  sudo apt-get install gsl-bin libgsl0-dev libgsl0ldbl -y
  sudo apt-get install flex bison libfl-dev -y
  sudo apt-get install g++-3.4 gcc-3.4 -y
  sudo apt-get install tcpdump -y
  sudo apt-get install aqlite aqlite3 libsqlite3-dev -y
  sudo apt-get install libxml2 libxml2-dev -y
  sudo apt-get install libgtk2.0-0 libgtk2.0-dev -y
  sudo apt-get install vtun lxc -y
  sudo apt-get install uncrustify -y
  sudo apt-get install doxygen grphviz imagemagick -y
  sudo apt-get install texlive texlive-extra-untils texlive-latex-extra -y
  sudo apt-get install python-sphinx dia -y
  sudo apt-get install python-pygraphviz python-kiwi python-pygoocanvas libgoocanvas-dev -y
  sudo apt-get install libboost-signals-dev libboost-filesystem-dev -y
  sudo apt-get install openmpi* -y
  ```

- 装NS3

- 第一遍编译的时候，记得加上 test 和 example两个参数

- eclipsee安装前装好JDK

- eclipse安装mercurial插件参考这个：
  [http://wireframesketcher.com/support/install/installing-mercurial-plugin.html](https://link.jianshu.com/?t=http://wireframesketcher.com/support/install/installing-mercurial-plugin.html)
  关键的一部就是在源里添加这个网址：<https://bitbucket.org/mercurialeclipse/update-site/raw/default/>

  加上就能在下面pending出mercurial。

  > Mercurial是一个分布式版本控制的跨平台工具。这里为什么要用到这个，我也不知道。官方的手册中也安装了这个Eclipse插件。以后懂了会补上。

- 基本上上面的教程全部涵盖了。主要是自己跟着做一遍之后理解每个地方配置的东西是啥。其实整个配置eclipse的过程就是在调一些编译build的参数。

- 不使用eclipse，直接终端 `./waf —xxxx`也是可以build的

  > 后从书中得知，编译源码时，build.py这个文件使用一次就不能再用了。想更改编译的配置只能用waf了

对着博客搭好之后，往下懵逼了。不知道该干啥了。

---

还好下到了中文版的书。

---

# 《NS-3网络模拟器基础与应用》

章节介绍：

1. 介绍
2. 快速上手
3. 基础
4. 结果分析
5. 内核-》加深理解
6. 其他模块，几个重要的通用模块，自己设计模块
7. 示例

# 二 快速上手

这一章作者解读了ns3自带的first样例。

比较不错。

通过跑通这个样例，我便了解了ns3仿真的过程(而不是只输出一个Hello)。从其丰富的APIs中我可以看出，这只是我们用来仿真的工具。继续学习！

# 三 ns-3基础

## 3.1 关键概念

- 节点

  理解成计算机即可

- 应用

  客户端、服务器即Application

- 信道

  信道实例可以模拟一条简单的线缆

  CSMA(≈以太网)、P2P(点对点)

  WiFi(甚至可以模拟三维障碍物)

- 网络设备

  ≈网卡。网络设备安装在节点上，使得节点通过信道和其他节点通信。像真实的计算机一样，一个节点可以通过多个网络设备同时连接到多条信道上。

- 拓扑帮助

  