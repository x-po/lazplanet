---
title: How to Capitalize Text
tags:
  - Sample Code
  - Tutorials
id: '102'
categories:
  - [Code Snippets]
  - [Text Operation]
date: 2013-04-14 00:28:00
thumbnail: how-to-capitalize-text/croppercapture2.jpg
downloads:
  - http://db.tt/lKVYnRYc
  - http://bit.ly/111WGlk
---

We write the words in the middle of the sentence in lowercase letters. Capitalizing is sometimes necessary to emphasize things. Any text (or string) can be converted to uppercase (capitalize). Here's how...
<!-- more -->


### Quick Tutorial

Create a new Application Project. **Project -> New Project -> Application -> OK**.

Drop a **TMemo** and a **TButton** in the form. Select the **TMemo** and set the `Scrollbars` property to `ssAutoVertical`. Set the `Caption` of the `TButton` to `Capitalize it !`. Double click the button. Then write the following:

```pascal
procedure TForm1.Button1Click(Sender: TObject);
begin

  Memo1.Text := UpperCase(Memo1.Text);

end;
```


### Run It

Press **F9** (or **Run -> Run**). Enter some text in the memo and then click the button.


![](how-to-capitalize-text/lazarus-lazarus-uppercase.gif)


### Concept

Well it's easy! Just find out what you want to capitalize and then use the [`Uppercase()`](http://www.freepascal.org/docs-html/rtl/sysutils/uppercase.html) function to capitalize it. The function comes from `sysutils` unit.

For example,

```pascal
uses
  ..., sysutils, ...;

...

begin

  Caption := Uppercase('John Doe');

end;
```

The above function will set the form's caption as `JOHN DOE`.

So the syntax is:

```pascal
function UpperCase(
  const s:
):;
```
