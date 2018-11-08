---
title: 侯捷C++笔记
date: 2018-10-30 
categories: C++
tags: [C++,Note]
---

舍友给的侯捷的C++教学视频。谢谢琪琪。做个笔记。

<!---more--->

# 面向对象（上）

## 2 头文件与类声明

```cpp
#ifndef __CLASSNAME__
#define __CLASSNAME__

    ...

#endif
```

## 3 构造函数

- inline函数，在class body内定义完成， **比较快 比较好**。但由于 你要写的函数太复杂，很难将她变成inline。而且就算你把函数写在了class里，是不是inline函数仍由编译器决定。
  - 在class body外的函数定义，可以用inline关键字，但也只是告诉编译器，你**尽量**把它变成inline

- 构造函数

  ```cpp
  class complex{
      public:
      complex(double r=0, double i=0)
          :re(r), im(i)			//初值列。一定要用。赋初值，速度更快。不这样就相当于没赋初值。
  	{ }
  }
  ```

- 关于overloading

  ```cpp
  complex(double r=0, double i=0){}
  complex(){} //可以吗？不可以，因为上一个函数有默认值。两个参数都有默认值，就是可以都不传入，因此冲突
  ```

## 4