---
title: Latex
date: 2019-04-01 15:44:47
categories: Note
tags: Latex
---



<!---more--->

# 初见

```latex
\documentclass{article}

\usepackage{ctex} %支持中文

\begin{document}

你好， \LaTeX.
    
\end{document}
```

编译：`xelatex test.tex`

直接生产PDF

`texdoc ctex` 查看ctex手册

`texdoc lshort-zh` 中文入门手册

# 基本信息

```latex
\title{My First Document}
\author{ixs}
\date{\today}

\begin{document}
	\maketitle %显示基本信息
\end{document}
```

