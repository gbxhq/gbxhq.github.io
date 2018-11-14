---
title: LeetCodeEasy
date: 2018-09-23 14:33:54
categories: Algorithm
tags: [Cpp,LeetCode]
---

知识点：`Hash、双指针`[1]     `int的范围`[7]     `stack、ascii`[20] 
`str.substr(pos,n)注意n是子串长` [14]     `int的范围、牛顿迭代法`[[69]](#69 x的平方根)      `copy(1.begin,1.end,2.begin)、rbegin\rend`[[88]](#88合并两个有序数组)      `摩尔投票算法`[169]   `reverse()的理解`[189]     `位运算`[136]   `string.erase()`[171]     `vt.erase()`[283]

<!---more--->

# 1.两数之和

- 朴素法

我的第一道LeetCode。上来就暴力解。我还纳闷呢，怎么输出结果和答案都一样。就是过不了。

原来是，时间复杂度为O(N)。过不了的。

- Hash O(nlogn)

哈希表Hash[x]  下标x表示x在nums中的下标。

**注意“** map底层使用平衡树一类的数据结构进行实现，插入和查询是O(logn)级别的。

代码

```cpp
class Solution {
public:
    vector<int> twoSum(vector<int>& nums, int target) {
        std::map<int, int> Hash;
        for (int i = 0; i < nums.size(); ++i)//建Hash
        {
        	Hash[nums[i]]= i;
        }
        std::vector<int> ans(2);
        for (int i = 0; i < nums.size(); ++i)
        {
        	if (Hash.find(target - nums[i])!=Hash.end()&&Hash[target-nums[i]]!=i)
        	{
        		ans[0] = i;
        		ans[1] = Hash[target-nums[i]];
        		break;
        	}
        }
        return ans;
    }
};
```

上面这个版本更好理解。

然后看到这个版本更简洁。

```cpp
class Solution {
public:
    vector<int> twoSum(vector<int>& nums, int target) {
        int N = nums.size();
        vector<int> res;
        map<int ,int> subMap;
        for(int i = 0;i<N;i++)
        {
            int temp = target - nums[i];
            auto it = subMap.find(temp);
            if(it != subMap.end())
            {
                res.push_back(it->second);
                 res.push_back(i);
            }
            subMap[nums[i]] = i;//i=0时肯定不会输出结果，这样建Hash和判断合二为一。
        }        
        return res;       
    }
};
```

- 知识点：

为啥要和 `map.end()` 比较呢？

> **修改和查找数据**
>
>  （1）修改Map["sunquan"]=11111;
>
>  （2）查找数据 用Map.find(key); 可以通过键来查。
>
> **切记不要用int value=Map[key];**
>
> **这样会在Map中增加这个key**，**而value就是缺省值（int 为0，string为空字符串）**。
>
> 通过方法（2），会返回迭代器的地址， **key不存在的话迭代器的值为**`Map.end()`

初学map哈哈。

https://www.cnblogs.com/panweiwei/p/6657583.html

# 7.反转整数

- 正解

```cpp
int reverse(int x) {
	if(x==-2147483648)
            return 0;
	int sign ;
	x>0? sign=1: (sign=-1,x=-x);
	long ans=0;
	while(x){
		int tmp = x;
		x = x/10;
		ans = ans*10 + (tmp-x*10);	
	}
	if (ans > INT_MAX)
		return 0;
	return ans*sign;
}
```

- Problems

1. 第一次问题出在ans的类型上。没有存成`long`。

   输入是1534236469时，输出错误。

   Int 的范围是 -2^31 ~ 2^31-1，即-2147483648~2147483647

   输入1534236469输出应该是9646435461都就90多亿了。int最大存21亿。

   所以应该输出零。而且这个数在ans存的时候要用`long`型，再和`INT_MAX`判断一次再return。

2. 改了long之后。1032个用例就差一个过不了了。就是-2147483648。

   -2147483648会被转成正2147483648。而正int里最大是2147483647。存不下2147483648 。所以特判了。

# 9.回文数

- 解法

```cpp
class Solution {
public:
    bool isPalindrome(int x) {
	int tmp = x;
	if(x<0)
		return false;
	if(x==0)
		return true;
	if (x%10 == 0)
	    return false;

	int y=0;
	while(x){
		y = y*10 + (x%10);
		x = x/10;
	}
	if(y==tmp)
		return true;
	else
		return false;
    }
};
```

- Problems

1. 开始忘了把x先存到tmp中。最后就直接判断` y==x` 结果每次都是返回false。

   很尴尬。x在while中肯定会被改成0啊。

2. 最后一个if只判断了true的情况，忘了写else😂😂😂

低级错误。见笑。

- 知识点  取消cin同步。取消cin与cout绑定。

在这题和翻转数字那题的优化解里都看到这么一断：

```cpp
//lambda 表达式，可以立即执行，在main函数之前执行，取消输入输出同步，较快输入输出速度
static const auto ban_io_sync = []()
{
	std::ios::sync_with_stdio(false);
	cin.tie(nullptr);
	return 0;
}();
//以后直接当模板用
```

 **`std::ios::sync_with_stdio(false)`**

这句语句是用来**取消cin的同步**，什么叫同步呢？就是iostream的缓冲跟stdio的同步。如果你已经在头文件上用了using namespace std;那么就可以去掉前面的std::了。

取消后就cin就不能和scanf，sscanf, getchar, fgets之类同时用了，否则就可能会导致输出和预期的不一样。 

取消同步的目的，是为了让cin不超时，另外**cout的时候尽量少用endl，换用”\n”，也是防止超时的方法**。 
当然，**尽量用scanf，printf就不用考虑这种因为缓冲的超时**了。

 **`cin.tie(NULL)`**

取消cin与cout的绑定

------

```
把上一段代码加到我的解法前面，运行时间直接从120ms到了64ms。
```

------

- 再看这个解法

  ```cpp
  static auto x = []() {
      ios::sync_with_stdio(false);
      cin.tie(nullptr);
      return 0;
  }();
  
  class Solution {
  public:
      bool isPalindrome(int x) {
          stringstream ss;
  		ss << x;
  		string str;
  		ss >> str;
          string strTmp = str;
          reverse(str.begin(), str.end());
  		if (strTmp == str)
  			return true;
  		return false;
      }
  };
  ```

  存成字符串。然后用了个reverse翻转。STL里面啥都有啊。

# 13.罗马数字转整数

- 无聊的一题

# 14.最长公共前缀

- 解

```cpp
string Prefix2(string a,string b){
        string ans = "";
        int p = 0;
        while(p <= (a.size()-1) && p <= (b.size()-1) ){
                if(a[p] == b [p]){
                        ans += a[p];
                        p++;
                }
                else
                        break;
        }
        return ans;
}
string longestCommonPrefix(vector<string>& strs) {
    string ans = "";
    if(strs.size()==0)
        return ans;
    if(strs.size()==1)
        return strs[0];
    auto iter1 = strs.begin();
    while(iter1 != (strs.end()-1)){
        auto iter2 = iter1 +1;
        ans = Prefix2(*iter1,*iter2);
        if(ans == "")
            break;
        iter1++;
        *iter1 = ans;
    }
    return ans;
}
```

我的解真是弱爆了。

**Problems**

- 第一次报错

  > "Runtime Error Message:reference binding to null pointer of type 'struct value_type'
  >
  >  Last executed input: []

  百度了一下。https://blog.csdn.net/zy2317878/article/details/78820900  特判：如果size()是0则返回""

  边界值特殊值要考虑好啊。

- 第二次是输入只有1个单词的时候。因为我是自己写了个比较两个单词最长前缀的函数。所以输入只有一个的时候，直接返回了""。正确答案应该是返回这个单词。我又强行加了这么一种情况。

- 我的解法效率极低。下面去看看大神们怎么解吧。

优化解

```cpp
string longestCommonPrefix(vector<string>& strs) {
        int vec_len=strs.size();
        if(vec_len==0)
            return "";
        int str_len=strs[0].size();
        for(int i=0;i<str_len;i++)
          for(int j=1;j<vec_len;j++)
            if(strs[j][i]!=strs[0][i])
                return strs[0].substr(0,i);
        return strs[0];
}
```

知识点：

- `str.substr(x,y)`就是取子串。
- `str.substr(0,0)`应该就是`""`

这个解的逻辑确实很清晰！

- 相同的逻辑，解答里还有一个0ms的写法就是

  `while((strs[0])[i])`

# 20.有效的括号

**Problems**

- `char`类型就用**单引号**啊！！！

  之前写 `s[i] == "("`一直报错。我就是整不明白为啥报错。

  **单引号啊！！！**

- `vector.end()`是地址，而且还是最后一个元素后面的地址。所以最后一个元素应该是

  `*(vector.end()-1)` 

  遍历的话可以用`for(auto s:vector)`

- 拿过题就用vector声明了一个栈做。不知道有`stack`都。NAIVE~

- 判断")}]"这三种情况的时候应该先看栈里是不是空。再看栈顶的元素。不然如果栈为空，取栈top()会跑不出来。

- 每次`return flase`之后都要记得**break**跳出循环啊

- **vector中v[i]与v.at(i)的区别**

  ```cpp
  v[0];    // A
  v.at[0];  // B
  ```

  如果v非空，A行和B行没有任何区别。

  如果**v为空或者下标越界**，B行会抛出std::out_of_range异常，A行的行为未定义。

  c++标准不要求vector::operator[]进行下标越界检查，原因是为了效率，总是强制下标越界检查会增加程序的性能开销。设计vector是用来代替内置数组的，所以效率问题也应该考虑。不过使用operator[]就要自己承担越界风险了。

  如果需要下标越界检查，请使用at。

我的解效率特别差。看一下人家的

**优化解**

```cpp
class Solution {
public:
    bool isValid(string s) {
       stack<char> sta;
	int length = s.length();
	if (length % 2 == 1) return false;
	if (s.empty()) return true;
	for (int i = 0; i < length; i++)
	{
		if (sta.empty())
		{
			sta.push(s.at(i)); 
		}
		else if(sta.top() == s.at(i) - 2 || sta.top() == s.at(i) - 1)
		{
			sta.pop();
		}
		else
		{
			sta.push(s.at(i));
		}
	}
	return sta.empty() ? true : false;
    }
};
```

哎！简洁又效率。

- 先判断了长度是奇数返回false.为空返回false.

- 没有瞎判断字符是不是`'{([])}'`

  而是利用了ascii码。那为啥有 -1 有 -2 呢？

  看了ascii码表你就知道了。

| ASCII值 | 控制字符 | ASCII值 | 控制字符 | ASCII值 | 控制字符 | ASCII值 | 控制字符 |
| ------- | -------- | ------- | -------- | ------- | -------- | ------- | -------- |
| 0       | NUT      | 32      | (space)  | 64      | @        | 96      | 、       |
| 1       | SOH      | 33      | !        | 65      | A        | 97      | a        |
| 2       | STX      | 34      | "        | 66      | B        | 98      | b        |
| 3       | ETX      | 35      | #        | 67      | C        | 99      | c        |
| 4       | EOT      | 36      | $        | 68      | D        | 100     | d        |
| 5       | ENQ      | 37      | %        | 69      | E        | 101     | e        |
| 6       | ACK      | 38      | &        | 70      | F        | 102     | f        |
| 7       | BEL      | 39      | ,        | 71      | G        | 103     | g        |
| 8       | BS       | **40**  | **(**    | 72      | H        | 104     | h        |
| 9       | HT       | **41**  | **)**    | 73      | I        | 105     | i        |
| 10      | LF       | 42      | *        | 74      | J        | 106     | j        |
| 11      | VT       | 43      | +        | 75      | K        | 107     | k        |
| 12      | FF       | 44      | ,        | 76      | L        | 108     | l        |
| 13      | CR       | 45      | -        | 77      | M        | 109     | m        |
| 14      | SO       | 46      | .        | 78      | N        | 110     | n        |
| 15      | SI       | 47      | /        | 79      | O        | 111     | o        |
| 16      | DLE      | 48      | 0        | 80      | P        | 112     | p        |
| 17      | DCI      | 49      | 1        | 81      | Q        | 113     | q        |
| 18      | DC2      | 50      | 2        | 82      | R        | 114     | r        |
| 19      | DC3      | 51      | 3        | 83      | S        | 115     | s        |
| 20      | DC4      | 52      | 4        | 84      | T        | 116     | t        |
| 21      | NAK      | 53      | 5        | 85      | U        | 117     | u        |
| 22      | SYN      | 54      | 6        | 86      | V        | 118     | v        |
| 23      | TB       | 55      | 7        | 87      | W        | 119     | w        |
| 24      | CAN      | 56      | 8        | 88      | X        | 120     | x        |
| 25      | EM       | 57      | 9        | 89      | Y        | 121     | y        |
| 26      | SUB      | 58      | :        | 90      | Z        | 122     | z        |
| 27      | ESC      | 59      | ;        | **91**  | **[**    | **123** | **{**    |
| 28      | FS       | 60      | <        | 92      | /        | 124     |          |
| 29      | GS       | 61      | =        | **93**  | **]**    | **125** | **}**    |
| 30      | RS       | 62      | >        | 94      | ^        | 126     | `        |
| 31      | US       | 63      | ?        | 95      | _        | 127     | DEL      |

# 26. 删除排序数组中的重复项

- 循环左移之后。记得这一轮就不要让标记位置走到下一个了。
- 传入空字符串的时候。我的程序会完全没有符合的条件。而导致没有返回值超时。以后要注意写条件的时候就想清楚会不会有特殊情况。
- sb了。没看题是排好序的。而且遍历的时候是遍历你返回值n的前n个。

# 27. 移除元素

吸收了上一题的答案。直接超越100%：

```cpp
int n = 0;
for (int i = 0; i<nums.size();i++){
    if(nums[i]!=val)//只要不是val就存进来
        nums[n++]=nums[i];
}
return n;
```

# 35. 搜索插入位置

PASS

# 53. 最大子序和

暴力写出来了。人家怎么就想到这么写呢：

```cpp
int res = INT_MIN, curSum = 0;
for (int num : nums) {
    curSum = max(curSum + num, num);
    res = max(res, curSum);
}
return res;
```

# 66. 加一

水

# 69 x的平方根

- int 的范围问题。本来用的int。结果人家给的输入。int平方之后就超过了范围了。以后要注意！

- 牛顿迭代法Mark。还可用用来解多次方程

# 70爬楼梯

其实就是斐波那契这题。我用递归写的。**但是！**我的写法，在输入是40以后，就超时咯（我特判了过的）。这么写不错：

```cpp
int climbStairs(int n) {
    if (n < 2) return 1;
    int dp0, dp1, dp;
    dp0 = dp1 = 1;
    for (int i = 2; i <= n; i++) {
        dp = dp0 + dp1;
        dp0 = dp1;
        dp1 = dp;
    }
    return dp;
}
```

# 88合并两个有序数组

🙂🙂🙂

一晚上我没做出来这题

- 结束void函数，直接`return;`

- 看了提示。从后往前插入。写出来了。速度不行。看一下这个0ms的：

  ```cpp
  void merge(vector<int>& nums1, int m, vector<int>& nums2, int n) {
      auto b1 = nums1.rbegin() + n, b2 = nums2.rbegin();
      for (auto cur = nums1.rbegin(); b1 != nums1.rend(); ++cur)
      {
          if (b2 == nums2.rend())
              return;
          if (*b2 < *b1)
              *cur = *b1++;
          else *cur = *b2++;
      }
      copy(b2, nums2.rend(), nums1.rend() - (nums2.rend() - b2));
  }
  ```

# 100.相同的树

先来看我之前写法：

```cpp
bool isSameTree(TreeNode* p, TreeNode* q) {
    if(p&&q)
        if(p->val!=q->val)
            return false;
    if(p&&!q)
        return false;
    if(q&&!p)
        return false;
    if(!p&&!q)
        return true;
    if(p->left&&q->left) //加上这个if条件是因为不然会因为p\q指向空指针报这个错：member access null pointer of type 'struct TreeNode'
        isSameTree(p->left,q->left);
    if(p->right&&q->right)
        isSameTree(p->right,q->right);
    return true;
}
```

这写法过不了。师哥改：

```cpp
bool isSameTree(TreeNode* p, TreeNode* q) {
    if(p&&q)
        if(p->val!=q->val)
            return false;
    if(p&&!q)
        return false;
    if(q&&!p)
        return false;
    if(!p&&!q)
        return true;
    return isSameTree(p->left,q->left)
        &&isSameTree(p->right,q->right)
        &&p->val==q->val;
}//直接返回两个结果&&起来不就解决了吗。这样有一边走到了false都会返回false
```

# 101.对称二叉树

- 开始写成了判断节点的两个孩子是否相同。完全整错了题。

- 用两个前序遍历把结果存到vector里。一个先遍历左孩子，一个先遍历右孩子。然后比较两个vt相同。

  - Problem，空节点的时候，不会存入vector，导致一些情况判错。解决方法：空节点存入-9999

- 正经的解法：

  ```cpp
   bool symmetric(TreeNode* left, TreeNode* right)
  {
      if (!left && !right)
      {
          return true;
      }
      if (!left || !right)
      {
          return false;
      }
      return left->val == right->val && symmetric(left->left, right->right) && symmetric(left->right, right->left);
  }
  bool isSymmetric(TreeNode* root) 
  {
      if (!root)
      {
          return true;
      }
      return symmetric(root->left, root->right);
  }
  ```
  
# 04二叉树的最大深度

必备

# 107二叉树的层次遍历 II

# 121/122 买股票1 买股票2

- 121：比较简单。但我第一次用的O(n2)。显得很没水平。只要记录最小值和最大值就可以了。不需要两层循环遍历的。

- 122：有了上一题的启发。很快解决。（本来想半天）

# 189旋转数组

- 开始想用一个临时数组存原来的数。然后根据需要copy。

  结果发现人家让空间复杂度O(1)原地完成。

- 想到了多次Reverse的方法。这个思路还是很清晰的。以下两点需要注意：

  - 如vt的内容是 1 2 3 4 5 6 7

    `reverse(vt.begin(),vt.begin()+3)`执行后，反转的就是前三个数。变成：

    321  4567

    虽然vt.begin()+3已经指向了4这个元素。

    这也可以解释为什么` reverse(vt.begin(),vt.end())`在end()指向空的时候，为什么可以翻转整个vector。

  - 输入的位移量大于数组长度的情况要考虑到，取余即可。（怕的是想不到）


# 136只出现一次的数字

高端操作：位运算

- 延伸阅读：https://blog.csdn.net/bitboss/article/details/51594037
  - 进阶1： **一个数组中，只有一个数字出现了一次，其他数字都出现了三次，找出这个出现了一次的数字；**
  - 进阶2：**<百度面试题>：在一个数组中，其他元素都是成对出现，只有两个数字只出现了一次，找出这两个数；**

# 151最小栈

- 可以用`*(vt.end()-1)`的方式取到vector的最后一个元素啊。
- 

# 两个数组的交集 II

关于map的遍历：

- 如果输入的map下标不存在则会创建这个下标。
- map.find()是查的关键字

# 168 EXCELL表列名

就是输入1输出A 输入28输出AB

- 注意输入26时，余数为0。这种情况需要特判。

  输入26时。n的循环也会多走一圈。需要特判。不然输入26会输出ZA。

- 每轮循环结束是 `n = n/26` 还是` n = n-26` ?    请思考清楚

# 171和168相对

`string.erase(pos,len)`,从pos位置开始删除len个字符。len缺省则删除到末尾。返回string的一个引用。

比如`str.erase(str.size()-5,5);` 删除了后5个字符。注意是.size()-5 。就是用下标来控制的。

我个人更喜欢用` str = str.substr(pos1,pos2)`这种方式删除

# 169绝对众数

- 用map做感觉是水题。

但是在别人的解法里学到了摩尔投票算法：

> 首先请考虑最基本的摩尔投票问题，找出一组数字序列中出现次数大于总数1/2的数字（并且假设这个数字一定存在）。显然这个数字只可能有一个。**摩尔投票算法是基于这个事实：每次从序列里选择两个不相同的数字删除掉（或称为“抵消”），最后剩下一个数字或几个相同的数字，就是出现次数大于总数一半的那个**。

- 继续延伸：1/k众数

Ex:k=3。求1/3众数。注：这样的数可能不存在

```cpp
    #include <iostream>
    #include <cstdlib>
    #include <vector>
    #include <iterator>
    using namespace std;

    void FindMode(const int *a, int size, vector<int>& mode){
    int m,n;//候选值
    int cm = 0, cn = 0;//候选值m、n的个数
    int i;
    for(i=0; i<size; i++){
        if(cm == 0){
            m = a[i];
            cm = 1;
        }else if(cn == 0){
            n = a[i];
            cn = 1;
        }else if(m == a[i]){
            cm++;
        }else if(n == a[i]){
            cn++;
        }else{
            cm--;
            cn--;
        }
    }
    //↑ 运行到此处时的m、n一定是众数，同时也是可能存在的1/3众数。
    
    cm = cn = 0;//为确保一定存在（因为1/3众数可能不存在），一定要重新遍历统计出现次数
    for(i=0; i<size; i++){
        if(m == a[i]){
            cm++;
        }else if(n == a[i]){
            cn++;
        }
    }
    if(cm > size/3){
        mode.push_back(m);
//        cout<< m<<" ";
    }
    if(cn > size/3){
        mode.push_back(n);
//        cout<< n<<" ";
    }
    
}

void Print(vector<int> vector){
    for(int i=0; i<vector.size(); i++){
        cout<< vector[i]<<" ";
    }
    cout<<endl;
}

int main()
{
    int a[] = {8,1,1,8,1,1,6,1,5,8,8};
    vector<int> mode;
    FindMode(a, sizeof(a)/sizeof(int),mode);
    Print(mode);
    return 0;
}
```

# 172阶乘后的零

- 13的阶乘就已经超INT范围了。用了`long long`型之后，它给我输入了个30🙂🙂🙂

  思路有问题🙃

- 找到了规律。其实有几个零就是和因子里有几个5有关系。所以遇到 5、25、125、675~这种要处理，可是刁钻的问题出现了。测试用例给了一个1808548329。5的13次方是1220703125。我的算法可以给出答案。但是超时了。后面还有个过不了的用例2147483647。就是INT_MAX呗。超时了。我直接特判了这两个过的。

- 结果发现0ms的答案只有这么几行：

  ```cpp
  int trailingZeroes(int n) {
      long long sum=0;
      for(long long i=5;i<=n;i=i*5)
          sum=sum+n/i;
      return sum;
  }
  ```

这时候再回头看一下我自己写的【超时版】答案。其实不就是一个意思吗：

```cpp
int ans = n/5; //先除以5
for(int i=2;pow(5,i)<=n;i++){ /*小于25的时候。
里面每有一个25就++(这不就是m/pow(5,2)吗？
我傻不拉几的在那用循环判断每次ans++)*/
    int tmp = n;
    while(tmp>=pow(5,i)){
        ans ++;
        tmp -= pow(5,i);
    }
    cout<<i<<endl;
}
return ans;
```

# 283移动零

输入 0 1 0 3 2

输出 1 3 2 0 0 

- 注意，用迭代器it控制，vt.erase(it) 时，删除了it指向的元素，且it会指向下一个it。
- 出现的问题：
  - 开始我只用迭代器来控制遍历，当迭代器为end时终止遍历，没考虑到，我会不停地在vector尾部push_back(0)，这样遍历永远都不会结束。

