---
title: R常用命令
categories: Note
tags: [Data Analysis,R,Note]
---

R语言常用命令记录

<!---more--->

- `?'mean'`可以看介绍
- `apropos("mea")`搜包含mea字符的方法


# 运算符


数学运算：
+，-，*，/，^，%%。(加，减，乘，除，乘方，求余。)

比较运算：
>，<，>=，<=，==，!=。(大于，小于，大于等于，小于等于，等于，不等于。)

逻辑运算：
&，|，!。(与，或，非。)


-  初始基本操作
---

```r
getwd()
```

获取工作目录。

---

```r
setwd("F:/R/myfun")
```

设定工作目录为F:/R/myfun。

---

```r
help(com)
?co
```

获得对命令com的说明。

---

```r
example(com)
```

命令com的使用实例。

---

```r
args(com)
```

查看命令com的变量格式。

---

```r
library()
```

列出已安装的包。

---

```r
library(AER) 或
requir(AER)
```

载入包AER。

---

```r
library(help = AER)
```

获取包AER的信息。

---

```r
detach(package:AER)
```

去除载入的包AER。

---

```r
search()
```

列出已载入的包。

---

```r
data()
```

列出已载入的包中的所有数据集。

---

```r
data(package = .packages(all.available = TRUE))
```

列出已安装的包中的所有数据集。

---

```r
try(data(package = "AER") )
```

列出包AER里的所有数据集。

---

```r
data(Affairs, "BankWages")
```

读入数据集Affairs和BankWages(这些数据集需已在data()中列出)。

---

```r
help(Affairs)
```

获取数据集Affairs的信息。

---

```r
attach(Affairs)
```

贴上数据集Affairs，其作用是可以直接对数据集里的变量进行操作。

---

```r
detach(Affairs)
```

上述操作的逆操作。

---
---

# 对一般对象的基本操作

```r
objects()
ls()
```

列出所有对象。
---

```r

mode(x)

```

查看对象x的模式：空，数值，字符，逻辑，复数，列表，函数(NULL，numeric，character，logical，complex，list，function)。

---

```r
class(x)
```

查看对象x的类型：除了mode里列出的几种类型外，还有整数，矩阵，因子，阵列，数据框，时间序列(integer，matrix，factor，array，data frame，ts)等其他类型。mode主要用于区别数据存放的方式，而class是一种更细微的分类方式，比如矩阵，就是一种更“有序”的数据存放方式。此命令比mode常用。

---

```r
as.matrix(x)
```

把对象x转为矩阵型。

---

```r
as.numeric(x)
```

把对象x转为数值型。

---

```r
str(x)
```

查看对象x的结构。str是structure的缩写。

---

```r
rm(x)
```

移除对象x。

---

```r
rm(list=ls(all=TRUE))
```

移除所有对象。

---
---

# 与向量有关的基本操作
```r

x = c(1,2,4)

```

生成元素依次为1,2,4的向量x，这里的c是concatenate的意思。注意其类型是数值，不是矩阵。

---

```r
x = c("a","b","cd")
```

生成元素依次为"a","b","cd"的字符向量x。

---

```r
x = paste("a","b","cd")
```

生成"a b cd"的字符x。

---

```r
x[a:b]
```

向量x的第a到b个元素。

---

```r
x[-i]
```

剔除向量x第i个元素所得的向量。

---

```r
length(x)
```

向量x的长度。

---

```r
x = seq(a, b, length = n)
```

生成以一个n维数值型向量x，第一个元素为a，最后一个元素为b，中间元素依次等距递增。(假设a<b)

---

```r
x = seq(a, b, c)
```

生成一个数值型向量x，第一个元素为a，其后元素依次加c，直到最后一个元素加c大于b。(假设a<b)

---

```r
x = seq(a)
```

从1开始生成一个递增或递减数值型向量x，最后一个元素绝对值为小于等于|a|的最大整数。

---

```r
x = a:b
```

生成一个从a递增(减)到b的数值型向量x。(a和b都是整数)

---

```r
x = rep(v, n)
```

对向量v进行n次复制生成新的向量x。

---

```r
x = rep(v, each = n)
```

依次对向量v的每个元素复制n此生成新的向量x。

---

```r
x = round(v)
```

生成一个向量x，其中每个元素是v对应元素的最近整数。

---

```r
order(x)
```

获得向量x第i大元素在向量中的位置。

---

```r
rank(x)
```

获得向量x每个元素大小位置。

---

```r
sort(x)
```

对向量x从小到大进行排序。降序：sort(x, decreasing = TRUE)。

---

```r
tapply(x,f,g)
```

根据因子f对向量x分类执行函数g。

---

```r
split(x,f)
```

向量x按因子f分类。

---

```r
diff(x)
```

返回向量x的差分向量。

---

```r
cumsum(x)
```

返回向量x的累加向量。

---
---

# 与矩阵有关的基本操作---
```r

M = matrix(0,c(m,n))

```

生成m行n列的0矩阵。

---

```r
M = rbind(X,Y)
```

按行合并矩阵X和Y形成新矩阵M。(X和Y列数需相同）

---

```r
M = cbind(X,Y)
```

按列合并矩阵X和Y形成新矩阵M。(X和Y行数需相同）

---

```r
colnames(M)
```

矩阵M的列名。

---

```r
rownames(M)
```

矩阵M的行名。

---

```r
nrow(M)
```

矩阵M的行数。

---

```r
ncol(M)
```

矩阵M的列数。

---

```r
diag(M)
```

矩阵M的对角线元素形成的向量

---

```r
M = diag(x)
```

生成以向量x为对角线元素，其他位置元素为0的矩阵M。

---

```r
dim(M)
```

矩阵M的维度。

---

```r
M[i,]
```

矩阵M第i行。(数值型)

---

```r
M[i,,drop = FALSE]
```

矩阵M第i行。(矩阵型)

---

```r
M = M[-i,]
```

删除矩阵M第i行。

---

```r

M[,j]

```

矩阵M第j列。

---

```r
M[i,j]
```

矩阵M第i行j列元素。

---

```r
t(M)
```

矩阵M的转置。若M为数值型向量，则t(M)为矩阵型行向量。

---

```r
X%*%Y
```

矩阵X乘矩阵Y。若Y是数值型的向量，R会自动判断其为行向量还是列向量。若X与Y为维度匹配的数值型向量，则返回的是矩阵型向量的内积。

---

```r
x%o%y
```

数值型向量x与y的外积(矩阵型)。

---

```r
X*Y
```

矩阵X与矩阵Y的Hadamard乘积。加、减、除、求余的规则和乘相同，即相同位置的元素进行运算。

---

```r
eigen(M)$val
eigen()$vec
```

求矩阵M的特征值和特征向量。

---

```r
solve(M)
```

矩阵M求逆。

---

```r
solve(A,b)
```

求解线性方程Ax=b。

---

```r
apply(M, dimcode, f, fargs)
```

对矩阵M的行(dimcode=1)或列(dimcode=2)依次进行函数f操作，f的变量(arguments)方正fargs里。

---
---

# 与列表有关的基本操作
```r

L = list(a = , b = , c = ,...)

```

建立列表L。

---
> L$a

```r
L[[a]

```

返回列表L里的对象a。

---

```r
L$a = NULL
```

去除列表L里的对象a。

---

```r
names(L)
```

列出列表L里的对象名。

---

```r
unname(L)
```

去掉列表L里的对象名。

---

```r
lapply(...)
```

list apply。功能与apply类似(参考上面的apply)，用于列表型数据。

---

```r
sapply(...)
```

simplified apply。功能与lapply类似，区别在于函数结果的类型不是列表(list)。

---
---

# 与数据框有关的基本操作
-  数据框是一种特殊的列表，所以对列表适用的函数往往对数据框也适用。此外，数据框也有矩阵型数据的特征，所以一些适用于矩阵型数据的函数，不如rbind，cbind，apply等也可以作用在数据框上。


```r

Data = data.frame(...)

```

创建数据框Data。

---

```r
fix(Data)
```

编辑数据框Data。

---

```r
head(Data)
```

显示数据框Data的前几行。

---

```r
attribute(Data)
```

列出数据框Data的组成部分。

---

```r
names(Data)
```

显示数据框Data的变量名。

---

```r
row.names(Data)
```

显示数据框Data的行名。

---

```r
Data$name1
```

数据框Data中名为name1的变量。

---

```r
Data[i]
```

数据框Data中第i个变量形成的数据框。

---

```r
merge(D1,D2)
```

合并数据框D1和D2，需要D1和D2中有至少一个相同的变量。

---
---

# 与逻辑型数据有关的基本操作---

```r

is.data.frame(x)

```

判断是否对象x是数据框。类似命令有is.ts(x)，is.numeric(x)等。

---

```r
all(x>a)
```

判断是否对象x的每个元素都大于a。

---

```r
any(x>a)
```

判断对象x的元素中是否存在一个大于a。

---

```r
x>y
```

判断x的每个元素是否大于y的每个元素。

---

```r
x[x>a]
```

向量x中大于a的元素组成的新向量。

---

```r
subset(x, x>a)
```

向量x中大于a的元素组成的新向量。与上面例子的区别在于若向量元素里有NA，上面的例子会保留在结果中，而subset命令会剔除掉。

---

```r
which(x, x>a)
```

返回向量中大于a的元素的位置。

---

```r
x = ifelse(b, u, v)
```

生成一个与b(逻辑向量)维度相同的数值向量，若b[i]为TRUE，则x[i]为u，反之为v。

---