---
title: How to get the files/folders inside a ZIP file
tags:
  - Articles
  - compression
  - Sample Code
  - zip
id: '78'
categories:
  - [Code Snippets]
  - [Files Directories]
date: 2013-05-25 01:02:00
authorId: adnan
thumbnail: how-to-get-filesfolders-inside-zip-file/compress-icon-zip.jpg
downloads:
  - https://drive.protonmail.com/urls/WMBGPZCGMR#jn0FjMMc2mGB
---

Ever wanted to make your own Zip Viewer? In this article we look at a simple code for listing the files/folders inside a ZIP file, without any third party libraries.
<!-- more -->


Compression softwares such as [WinZIP](http://www.winzip.com/), [WinRAR](http://www.rarlab.com/download.htm), [7-zip](http://www.7-zip.org/) has been one of the needed softwares for our PCs. We can compress dozens of files into a single file, also shrink its size at the same time, with these compression utilities. But what if we could make our own zip viewer?

We have looked into "{% post_link how-to-create-zip-file 'How to create a .Zip File with your own program' %}", which was based on a third party library named [ZipFile](http://wiki.freepascal.org/ZipFile). Unfortunately the library could not open some zip files, though the add to zip functionality just works fine. So I had to find another alternative for "opening" a zip file. So I found [`paszlib`](http://wiki.freepascal.org/paszlib). It is available with the Lazarus installation, so there is no need to install any third party libraries.

So lets get on with a Quick Tutorial:


### Quick Tutorial

Create a Application Project (**Project -> New Project -> Application -> OK**).

Drop a **TFileNameEdit** (from Misc tab), a **TButton**, **TListBox**, **TLabel** (all from Standard tab). You should create a form layout like the screenshot below:


![](how-to-get-filesfolders-inside-zip-file/zip-viewer-formlayout.gif)


Now set the `Name` property of the **TLabel** to `lblCount`. Also set the `Filter` of **TFileNameEdit** to:

```
ZIP Files (*.zip)|*.zip
```

Switch to source code view (**F12**). Add `Zipper` in the `uses` clause:

```pascal
uses
  ... , zipper;
```

Now double click the **Tbutton** and enter:

```pascal
var
  szip: TUnZipper;
  i: integer;
begin
  szip := TUnZipper.Create;
  szip.FileName := FileNameEdit1.FileName;
  szip.Examine;

  ListBox1.Clear;
  for i := 0 to szip.Entries.Count-1 do begin
    ListBox1.Items.Add(szip.Entries.Entries[i].ArchiveFileName);
  end;

  lblCount.Caption:='Total Entries found: '+inttostr(szip.Entries.Count);

  szip.free;
end;
```

**Explanation:**

```pascal
var
  szip: TUnZipper;
  ...
  szip:=TUnZipper.Create;
  szip.FileName := FileNameEdit1.FileName;
```

We Initialize `TUnZipper` (not the popular `TZipper` type), because it can read the files inside the zip file. We set the `Filename` that we want to read.

```pascal
  szip.Examine;
```

It checks the file for any defects and it reads the files and makes them available to our code.

```pascal
  for i := 0 to szip.Entries.Count-1 do begin
    ListBox1.Items.Add(szip.Entries.Entries[i].ArchiveFileName);
  end;
```

We iterate through all the file items/entries that are in the zip file and add them to our Listbox. We can also use many other information available to us instead of `ArchiveFileName`. See the `TZipFileEntry` class declaration below:

```pascal
  TZipFileEntry = Class(TCollectionItem)
  ...
  Public
    constructor Create(ACollection: TCollection); override;
    function IsDirectory: Boolean;
    function IsLink: Boolean;
    Procedure Assign(Source : TPersistent); override;
    Property Stream : TStream Read FStream Write FStream;
  Published
    Property ArchiveFileName : String Read GetArchiveFileName Write FArchiveFileName;
    Property DiskFileName : String Read FDiskFileName Write FDiskFileName;
    Property Size : Integer Read FSize Write FSize;
    Property DateTime : TDateTime Read FDateTime Write FDateTime;
    property OS: Byte read FOS write FOS;
    property Attributes: LongInt read FAttributes write FAttributes;
    Property CompressionLevel: TCompressionlevel read FCompressionLevel write FCompressionLevel;
  end;
```

We can also use, for example, `Entries[i].IsDirectory` or `Entries[i].Size` information to view extra information in our software. Hope to post another article with more options (such as adding files, extracting files etc.).

Now run the Project (**F9** or **Run -> Run**). Open a .ZIP file and click the button. You will see a list of files and folders in the zip file.


![Zip viewer lazarus FPC runtime screenshot](how-to-get-filesfolders-inside-zip-file/zip-viewer-lazarus.gif "Zip viewer lazarus FPC runtime screenshot")


Zipper (a.k.a. paszlib) can also be used in Console projects. So [you can create command line programs with paszlib library](http://wiki.freepascal.org/paszlib#Examples).
