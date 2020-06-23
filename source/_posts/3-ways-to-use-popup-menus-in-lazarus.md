---
title: 3 ways to use Popup Menus in Lazarus
tags:
  - Articles
  - Form Controls
  - Interface
  - menu
  - popup
  - right click
  - System API
  - Tutorials
url: 63.html
id: 63
categories:
  - Uncategorized
date: 2013-08-05 12:08:00
---

![](3-ways-to-use-popup-menus-in-lazarus/popup-menu-thumb.jpg)Pop Up menus pop when you right click on the application somewhere to make available the quick jobs in a menu. We explore 3 ways of using popup menus in Lazarus.  
  
Popup menus are common in many popular applications. For example, in VLC Media Player (or any other typical media player) if you right click on the video area then a popup menu appears. It lets you open media files, play or pause, skip to the next song and many more.  
![](3-ways-to-use-popup-menus-in-lazarus/vlc-popupmenu.gif)  
Lazarus has a very easy implementation of this popup-style menu. Lazarus has a component named TPopupMenu for this purpose. Once we create menus we can show it in 3 different ways, which I will demonstrate.  
  
  

### Creating the popup menu

Creating the popup menu is easy. Just drop a TPopupMenu component in the form, then right click it and choose "Menu Editor...". Then select the item you want to modify then modify it with the help of the Object Inspector -> Properties. You can then change the menu item caption, name, checked etc. You can also add items by right clicking any of the existing menu items in the menu editor window. You will have to create as many TPopupMenu components as many popup menus you want.  
  
Let's just see it practically...  
  
Create a new project (Project-> New Project-> Application-> OK).  
  

#### Creating a new popup menu and editing its items' properties

  
Now drop a TPopupMenu component in the form. Now right click it and select "Menu Editor...".  
  
![](3-ways-to-use-popup-menus-in-lazarus/popupmenu-editor.gif)  
  
You will see 1 menu item already created for you. You can change its property, for example, Caption property to something like "My popup menu item 1". For this you can click on the item to select it, then change the property from the Object Inspector.  
  

#### Adding new item to the menu

  
If you want more item(s) to be added then the default single item, then obviously you need to add more menu items. You can add new menu items by right clicking and selecting "Insert New Item (after)" or "Insert New Item (before)".  
  
![](3-ways-to-use-popup-menus-in-lazarus/popupmenu-add-new-item.gif)  
  
After inserting menu items, close the Menu Editor window to get back to your form.  
  

### Using Popup Menu in 3 ways

  

#### Way 1: Using the PopupMenu property (without code)

You can skip all the mumbo jumbo and show the popup menu without writing any code! If you set the PopupMenu property of a component to the TPopupMenu you just prepared, then the menu will appear when you right click on that component.  
  
Drop a TButton on the form. Set its PopupMenu property to the TPopupMenu from the dropdown menu.  
  
![](3-ways-to-use-popup-menus-in-lazarus/popupmenu-properties.gif)  
Now run the project (F9 or Run-> Run) and right click on the button to see the popup menu.  
  

#### Way 2: Using code to show the popup menu

![](3-ways-to-use-popup-menus-in-lazarus/popupmenu-code-lazarus.gif)  

### Download Sample Code ZIP

You can download the above example tutorial project source code from here: [http://db.tt/NP2l6YEK](http://db.tt/NP2l6YEK)  
Size: 635 KB  
The package contains compiled executable EXE.