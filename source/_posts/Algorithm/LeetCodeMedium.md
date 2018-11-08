---
title: LeetCodeMedium
date: 2018-11-01 20:41:50
categories: [Algorithm]
tags: [LeetCode]
---

代码基本都在这里了：https://github.com/ixsim/OJ

<!---more--->

# 2 两数之和

easy

# 3 无重复字符的最长子串

- 不能判断到有重复字符就从0开始算啊。字符串的头尾不固定的。

  比如 `avadc` 虽然a在第三个位置出现了。但是不能重新计数。前面的v也可以算的。

  - 很快就解决了这个问题。就是 计数的变量count 找到重复字符后，不置为0，而是置为 两个相同字符的坐标差。这样就包含了后面的字符。
  - 新问题就是，从新计数的单词，之前的字母还在map中没清空。怎么办？
    - 我设了一个开始坐标start，只有在map中且坐标大于这个start才算重复出现。

看下第一的答案：

```cpp
int lengthOfLongestSubstring(string s) {

    int subStringStart = 0,subStringEnd = 0, maxLength = 0;
    string subString;
    size_t occPos;    	for(subStringEnd;subStringEnd<s.length();subStringEnd++){
        //查找subStringStart位置之后是否有要插入的字符
        occPos = subString.find(s[subStringEnd],subStringStart);
        //如果subString中已有带插入字符，将子串中已有字符的位置(occPos)
        //的下一位置(occPos + 1)设置为无重复子串的开始位置,即向右移动滑窗
        //不断调整无重复子字符串的开始位置
        if(occPos != string::npos){
            subStringStart = occPos + 1; 
        }
        //依次将s中的元素插入subString中，同时不断计算最长子字符串长度并更新
        subString.push_back(s[subStringEnd]);
        maxLength = max(maxLength, subStringEnd-subStringStart+1);
    }
    return maxLength;
}
```

# 5最长回文子串

没想到我的方法效率还不错。