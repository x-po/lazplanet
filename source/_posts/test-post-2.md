---
title: Test post 2
tags:
  - Introduction
id: '119'
categories:
  -
date: 2013-03-20 15:54:00
authorId: adnan
---


A: Hi, how are you doing?
B: I'm fine. How about yourself?
A: I'm pretty good. Thanks for asking.
B: No problem. So how have you been?
A: I've been great. What about you?
B: I've been good. I'm in school right now.
<!-- more -->

{% post_link test-post-2 'Test link' %}
A: What school do you go to?
B: I go to PCC.
A: Do you like it there?
B: It's okay. It's a really big campus.
A: Good luck with school.
B: Thank you very much.

{% post_link test-post-2 'Test link' %}


### Code Example


```pascal
Function TForm1.StrToHex(s: String): String;
Var
  i: Integer;
  ch: Char;
Begin
  { stream
  comment
  }
  Result:=''; i:=1;
  While i<=Length(s) Do Begin
       ch := s[i];
       Result := Result+IntToHex(ord(ch), 2);
       Inc(i);
  end;
  //comment
End;
```

A: How's it going?
B: I'm doing well. How about you?
A: Never better, thanks.
B: So how have you been lately?
A: I've actually been pretty good. You?
B: I'm actually in school right now.
A: Which school do you attend?
B: I'm attending PCC right now.
A: Are you enjoying it there?
B: It's not bad. There are a lot of people there.
A: Good luck with that.
B: Thanks.
