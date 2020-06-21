---
title: Simple List search program
tags:
  - Algorithms
  - Code Snippets
  - list
  - List Iteration
  - Search
url: 84.html
id: 84
categories:
  - Uncategorized
date: 2013-05-19 03:21:00
---

![](http://3.bp.blogspot.com/-f9CGr_1Xf-o/UZhDc-JKHzI/AAAAAAAAA10/PUyt3QAI-Lg/s1600/search-list-thumb.gif)Searching a list is one of computer's specialties. If you are a programer, you at least need to know this simple list search technique.  
  
  

### Introduction

Lists are a collection of strings/texts -- in simple. A list can be searched in many ways. But today we see how to create a simple list search. The technique is simple, we search from the first item (0) to the last (count-1). We see if list item text is equal to our search term, case insensitively. Case insensitivity means searching for One, one, oNe is the same thing. We will uppercase the search string, and the list item also. It will help us find the string regardless of the case that the string is on.  
  

### Limitations

The technique is easy to apply, but with some disadvantages. The user needs to input the exact string in search box in order to find something out. No partial search string will work. For example, if there is an item "apple pie" and the user enters "apple" or "pie" in the search box, it will not find the item. Also, it cannot list the search results based on the most relevant to less relevant items. It only lists according to the order of the list items.  
  
Keeping these disadvantages in mind, this code seems to be pretty much useless. But it is not. It is great for serial numbers, which require exact matches. It can have many other uses. Try it yourself and you will get tons of ideas.  
  
(If you are interested in partial matching list search [check out this tutorial](http://lazplanet.blogspot.com/2013/05/partial-list-search-technique.html).)  
  

### Quick Tutorial

Create a new Application Project (Project->New Project->Application->OK).  
  
Drop a TEdit, TButton and 2 TListBoxes. The TEdit (Edit1) is the search text box. The TButton (Button1) is our search button. Listbox1 is the list that we want to search. Listbox2 is the list where our search results will appear. (I have positioned the Listbox2 under the search box because it shows the search results, so it should be under the search box.)  
  
![](http://1.bp.blogspot.com/-6o56Cus3Htk/UZg37eV59PI/AAAAAAAAA1U/y5dRRwwcBzo/s1600/search-form.gif)  
You can add TLabels to further decorate the form or for indication of components of what they do.  
  
Now double click the TButton and enter the following code:  
  

var  
  i: Integer;  
  
begin  
  ListBox2.Clear;  
  
  for i:= 0 to ListBox1.Items.Count-1 do begin  
    if UpperCase(ListBox1.Items\[i\]) = UpperCase(Edit1.Text) then  
      ListBox2.Items.Add(ListBox1.Items\[i\]);  
  
  end;  
  
end;

  
**Explanation:**  
Now a little explanation of what we are doing.  
  
  ListBox2.Clear;  
  
For the first time we search something our listbox2 is empty. So we can happily add search results to the list. But what happens when the user searches for another string? Without cleaning it up, the previous search results will stay there. New search results will add after the previous items. That's a problem. So we clear up the list everytime the user hits search button.  
  
  for i:= 0 to ListBox1.Items.Count-1 do begin  
  
The Item index starts from 0 and then ends at list-count - 1. For example, if a list has 5 items then the item\[index\] will start from 0 and end to 4. It is zero-based index.  
  
    if UpperCase(ListBox1.Items\[i\]) = UpperCase(Edit1.Text) then  
      ListBox2.Items.Add(ListBox1.Items\[i\]);  
  
We see if the item text is equal to our search string. We uppercase both the search string and the list item because we want to search case insensitively. That means the search string & list item "AbC" or "aBc" or "abc" or "Abc" all becomes "ABC". So we search regardless of the case.  
  
When we find the match, we add the item to listbox2.  
  
Now add an onKeyPress event to the Edit1 (select it, then go to Object Inspector-> Events tab-> Click on the \[...\] button in front of the OnKeyPress) and enter the following code:  
  

  // if the user presses enter...  
  if (Key = chr(10)) or (Key = chr(13)) then begin  
    Button1Click(Sender);  
  end;

  
It is a simple code to virtually click the button when the user presses enter after entering search string.  
  
![](http://3.bp.blogspot.com/-BocW5iBvAME/UZhA4LcQVII/AAAAAAAAA1k/rxiBYQZyeJA/s1600/list-search-lazarus.gif)  
  

### Download Sample Code ZIP

You can download an example source code from here: [http://db.tt/6cIeojH9](http://db.tt/6cIeojH9)  
Or here: [http://bit.ly/18cGUwa](http://bit.ly/18cGUwa)  
Size: 519 KB  
The package contains compiled executable EXE file.