---
title: Notes of WebRTC
date: 2019-01-23 09:57:36
categories: WebRTC
tags: [Note]
---



<!---more--->

![](https://raw.githubusercontent.com/chinalixs/Pic/master/WebRTC%E6%A1%86%E6%9E%B6.png?token=AR5AloQ_13rmoA6YeFPrfm94QXQRay1Hks5cR91LwA%3D%3D)

- netEQ是webRTC中音频技术方面的两大核心技术之一（另一核心技术是音频的前后处理，包括AEC、ANS、AGC等，俗称3A算法）

  netEQ有两大模块，**MCU（micro control unit, 微控制单元）和DSP（digital signal processing, 信号处理单元）** MCU负责控制从网络收到的语音包在jitter  buffer里的插入和提取，同时控制DSP模块用哪种算法处理解码后的PCM数据，DSP负责解码以及解码后的PCM信号处理，主要PCM信号处理算法有加速、减速、丢包补偿、融合等），MCU模块在CP （communication processor, 通讯处理器）上做，两个模块之间通过消息交互。