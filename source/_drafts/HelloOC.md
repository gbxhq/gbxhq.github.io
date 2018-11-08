---
title: HelloOC
date: 2018-09-05 11:17:28
categories: [iOS]
tags: [Note,Obj-C]
---

Hello?

🙂🙂🙂

😌😌😌

🙁🙁🙁

<!---more--->

# Notes

- `#import <...>`表示包含系统自带的文件，`#import "..."`表示包含开发人员自己创建的文件

# Basics

## Functions

```objective-c
- (return_type) method_name:( argumentType1 )argumentName1 
joiningArgument2:( argumentType2 )argumentName2 ... 
joiningArgumentn:( argumentTypen )argumentNamen {
   body of the function
}
```

## Interface and Implementation

A interface file `MyClass.h`

```objc
@interface MyClass:NSObject { 
   // class variable declared here
}
// class properties declared here
// class methods and instance methods declared here
@end
```

A implementation file `MyClass.m`

```objc
@implementation MyClass
   // class methods defined here
@end
```

## Object Creation

```objc
MyClass  *objectName = [[MyClass alloc]init] ;
```

## Methods

Method is declared in Objective C as follows −

```objc
-(returnType)methodName:(typeName) variable1 :(typeName)variable2;
```

An example is shown below.

```objc
-(void)calculateAreaForRectangleWithLength:(CGfloat)length 
andBreadth:(CGfloat)breadth;
```

其中 **andBreadth** 就是为了方便对函数进行阅读的可选字段

```objc
[self calculateAreaForRectangleWithLength:30 andBreadth:20];
```

### Class Methods

类方法不需要创建类对象可被直接访问。

没有任何变量和关联对象。ex:

```objc
+(void)simpleClassMethod;
```

假设属于MyClass类。可以直接这么访问：

```objc
[MyClass simpleClassMethod];
```

### Instance Methods

Instance methods can be accessed only after creating an object for the class. Memory is allocated to the instance variables. An example instance method is shown below.

```
-(void)simpleInstanceMethod; 
```

It can be accessed after creating an object for the class as follows −

```objc
MyClass  *objectName = [[MyClass alloc]init] ;
[objectName simpleInstanceMethod];
```

## Important Data Types in Objective C

| Sr.No. | Data Type                                                    |
| ------ | ------------------------------------------------------------ |
| 1      | **NSString**It is used for representing a string.            |
| 2      | **CGfloat**It is used for representing a floating point value (normal float is also allowed but it's better to use CGfloat). |
| 3      | **NSInteger**It is used for representing integer.            |
| 4      | **BOOL**It is used for representing Boolean (YES or NO are BOOL types allowed).j |

## Printing Logs

NSLog - used for printing a statement. It will be printed in the device logs and debug console in release and debug modes respectively. For example,

```
NSlog(@"");
```

## Control Structures

Most of the control structures are same as in C and C++, except for a few additions like for in statement.

## Properties

For an external class to access the class, variable properties are used. For example,

```
@property(nonatomic , strong) NSString *myString;
```

### Accessing Properties

You can use dot operator to access properties. To access the above property, we will do the following.

```
self.myString = @"Test";
```

You can also use the set method as follows −

```
[self setMyString:@"Test"];
```

## Categories

Categories are used to add methods to the existing classes. By this way, we can add method to classes for which we don't have even implementation files where the actual class is defined. A sample category for our class is as follows −

```objc
@interface MyClass(customAdditions)
- (void)sampleCategoryMethod;
@end

@implementation MyClass(categoryAdditions)

-(void)sampleCategoryMethod {
   NSLog(@"Just a test category");
}
```

## Arrays

NSMutableArray and NSArray are the array classes used in objective C. As the name suggests, the former is mutable and the latter is immutable. An example is shown below.

```objc
NSMutableArray *aMutableArray = [[NSMutableArray alloc]init];
[anArray addObject:@"firstobject"];
NSArray *aImmutableArray = [[NSArray alloc]
initWithObjects:@"firstObject",nil];
```

## Dictionary

NSMutableDictionary and NSDictionary are the dictionary classes used in objective C. As the name suggests, the former is mutable and the latter is immutable. An example is shown below.

```objc
NSMutableDictionary *aMutableDictionary = [[NSMutableArray alloc]init];
[aMutableDictionary setObject:@"firstobject" forKey:@"aKey"];
NSDictionary*aImmutableDictionary= [[NSDictionary alloc]initWithObjects:[NSArray arrayWithObjects:
@"firstObject",nil] forKeys:[ NSArray arrayWithObjects:@"aKey"]];
```

# Delegates

## EX.

假设对象A唤起对象B完成一个动作。一旦完成A会知道并作出相应动作。这就是代理完成的。其中：

- A是B的代理对象
- B将有A的参考
- A会执行B的代理方法
- B会用代理方法给A通知

