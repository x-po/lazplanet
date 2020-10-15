# Contributing

## Front-matter

Front matter is a section on the markdown files in this project that are written in YAML and put between lines having only 3 dashes (`---`). Although Hexo supports JSON for front-matter, this project uses only YAML.

Example:
```yaml
---
title: How to Run Lua Code Inside Lazarus Programs
tags:
  - Articles
  - Linux
  - lua
  - Tutorials
id: '7'
categories:
  - [System API]
date: 2020-05-01 16:37:00
thumbnail: lua-code-inside-lazarus/lua-inside-lazarus-thumb.jpg
downloads:
  - https://www.dropbox.com/s/xyz7jws01axuvnk/lua-inside-fpc.zip?dl=1
  - https://gitlab.com/lazplanet/lua-inside-fpc/-/releases
---

<Article body here>
```


- **tags:** Put some relevant tags for the article.
- **id:** ID is optional for newer posts. But if you can, put a random 4 digit number that is not there on any other article.
- **categories:** Add categories each inside square brackets (`[...]`).
- **date:** Date is formatted as `YYYY-MM-DD HH:MM:SS`
- **thumbnail:** Put a 200px X 150px thumbnail image inside a folder with same name as the markdown file and link it here.


### Downloads

There are downloads related to articles. e.g. project souce code zip downloads. Each url listed inside this variable will be rendered as download links at the end of the article.

Example:

```yaml
downloads:
  - https://www.example.com/somefile-1.zip
  - https://gitlab.com/lazplanet/some-project/-/releases
```

Alternative example with objects:

```yaml
downloads:
  - title: 'Windows 32-bit'
    url: https://example.com/somefile32.zip
  - title: 'Windows 64-bit'
    url: https://example.com/somefile64.zip
  - https://gitlab.com/lazplanet/some-project/-/releases
```

`downloads` in front-matter is required for tutorial articles with FPC code. Under `downloads` array, each array item can be either just a string containing download url, or an object having both a caption and url for the download (see the `title` and `url` example above). Mixing string and object under the same `downloads` entry is supported, but not recommended.


## Article body

Article body is the article itself without the YAML front-matter.

Example:

```md
...
<YAML front-matter>
---

<Article short summary>
<!-- more -->

<Rest of the article>
```

Typical tutorial article layout:

```md
...

<Article short summary>
<!-- more -->

<Introduction>

## Basic Tutorial

<optional reusable code example>

## Tutorial

<instructions>

<how to run and test the program>

<optional experiment ideas, conclusion>

**Ref:**
- Something 1: [Link text](http://example.com/something1)
- Something 2: [Link text](http://example.com/something2)
```


### Writing Advice

Keep the language simple and friendly without using unnecessary jurgeon to complicate things. If you have to use a jurgeon, ideally you should explain it or link to a reference that describes what it is.

To make things easier to understand and friendly, you can describe a personal story/use case/experience etc.

If some instructions are complex, try to divide them into bullet points or step headings or both.

Try to keep as less sentences as you can in a paragraph. 1-3 is ideal. If more is needed, try to divide them into multiple paragraphs.


### Formatting

Bold (`**...**`) or put in code tag (`` `...` ``) for the component types/names and their properties inside instruction portions of the article. Do that for any button/menu/settings or important piece of element so that readers have a good time following your instructions and they pop out as keywords to the readers even at a glance.

Create link tags for URLs (`[Link text](http://example.com/url)`) so that they are easier to go to.

When inserting a code block, describe the type of code it is.

Example 1:

	```pascal
	WriteLn('example');
	```

Example 2:

	```bash
	sudo apt install lazarus
	```


### Whitespaces and empty lines

Do not keep space or any whitespace at the end of any line (unless absolutely needed for any special circumstances).

Keep an empty line at the end of the markdown file.

Make sure to keep 2 empty lines before headings so that it's easier to differentiate and read on markdown text. This does not have any effect when rendered to HTML.
