---
title: C++学习笔记
categories: 
tags: 
---

语法的笔记。用到啥就复制点。仅供个人查阅~

<!---more--->

- `cin`怎么结束输入

  Mac下是`ctrl + D` Win 下是 `ctrl + Z`

# Vector

容器是连续的内存区。有1.5倍的容量大小。可以避免开数组设置大小的问题。

# 初始化

- 默认构造函数

  ```c++
  vector<int> vt(10); //10个0
  vector<int> vt(10,1); //10个1
  ```

- 数组地址初始化

  ```c++
  int a[3] = {1,2,3};
  vector<int> vt(a,a+3);
  ```

- 文档中看到的方法，编译过不了?

  ```cpp
  std::vector<int> v1{1, 2, 3};
  ```


## 遍历

- 迭代器

  ```c++
  ST tmp;
  vector<ST>:: iterator iter;
  for(iter = vt.begin();iter != vt.end();iter++){
      tmp = *iter;
      //取到了
  }
  ```

- `at()` 括号里是下标。跟数组一样访问就行了。`tmp=vt.at(5);`

# String

- string对象的操作

  ```cpp
  istringstream os
  os<<s   //s写入到输出流os中。返回os
  is>>s	//从输入流is读取字符串赋给s，返回is。
  s.empty()
  s.size()
  s[n] //n从0计
  ```

## npos

在MSDN中有如下说明：

basic_string::npos
static const size_type npos = -1;//定义
The constant is the largest representable value of type size_type. It is assuredly larger than max_size(); hence it serves as either a very large value or as a special code.

以上的意思是npos是一个常数，表示size_t的最大值（Maximum value for size_t）。许多容器都提供这个东西，用来表示不存在的位置，类型一般是std::container_type::size_type。

```cpp
#include <iostream>  
#include <limits>  
#include <string>  
using namespace std;  
  
int main()  
{  
    size_t npos = -1;  
    cout << "npos: " << npos << endl;  
    cout << "size_t max: " << numeric_limits<size_t>::max() << endl;
}
```

执行结果为：

​                 **npos:           4294967295**

​                 **size_t max:  4294967295**

可见他们是相等的，也就是说npos表示size_t的最大值

# 字符串数组

参考：https://www.cnblogs.com/kungfupanda/archive/2012/06/15/2456931.html

我就抄点我用到的     定义与初始化

```c++
char str[ ]={"I am happy"}; //可以省略花括号，如下所示
char str[ ]="I am happy";
```

注意：上述这种字符数组的整体赋值只能在字符数组**初始化**时使用，不能用于字符数组的**赋值**。但是字符串指针就可以这么赋值：

```c++
char *a;
a = "I love China."
```

输出方式

```c++
char str[] = "http://c.biancheng.net";
printf("%s\n", str);  //通过变量输出
puts(str);  //通过变量输出
cout << str ; //C++可以这样
```

# Map

遍历

```cpp
map<int, int>::iterator iter;
iter = _map.begin();
while(iter != _map.end()) {
    cout << iter->first << " : " << iter->second << endl;
    iter++;}
```

# Set

```cpp
int numList[6]={1,2,2,3,3,3};
//1.set add
set<int> numSet;
for(int i=0;i<6;i++){    //2.1insert into set
    numSet.insert(numList[i]);
}
//2.travese set
for(set<int>::iterator it=numSet.begin() ;it!=numSet.end();it++){
    cout<<*it<<" occurs "<<endl;
}
//3.set find useage
int findNum=1;
if(numSet.find(findNum)!=numSet.end())
    cout<<"find num "<<findNum<<" in set"<<endl;
else
    cout<<"do not find num in set"<<findNum<<endl;	
//set delete useage
int eraseReturn=numSet.erase(1);
if(1==eraseReturn){
	cout<<"erase num 1 success"<<endl;
else
    cout<<"erase failed,erase num not in set"<<endl;
return 0;
}
```

# Note

- `void func(char * arr, int x)` 你在定义的这个函数里 写 `x++` 这种句子。会报错? x是个形参，怎么能 变来变去呢？

  但是我觉得应该可以变啊。我得去试试再。

- cout<<oct<<x<<dec<<x<<hex<<x<<endl; //oct、dec、hex类似格式控制符，控制其后的变量

- 原来if里定义的变量也不能在if外使用。

- 枚举类型成员都是整型变量。可以为负。不设初值就是上一个变量+1。`enum a {sum=9,mon=-1,tue};` 打印tue的值就是0.