---
title:  C++学习笔记
date: 2018-12-06 00:03:01
categories: cpp
tags: [cpp,Note]
---



<!---more--->

# conversion function 转换函数

```cpp
class Fraction{
public:
    Fraction(int num,int den=1)
        : m_mumerator(num),m_denominator(den) { }
    operator double() const {
        return (double) (m_numerator/,_denominator);
    }
private:
    int m_numerator;
    int m_denominator;
}
```

`operator double()`注意： 1，不需要写返回类型（本来就是返回double，写了还可能写错） 2，加const（一定不会改数据，也不需要参数）