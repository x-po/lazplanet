---
title: 'How to Install Lazarus on Ubuntu 20.04 LTS [with Video]'
tags:
  - Articles
  - guide
  - install
  - Linux
  - Tutorials
  - Ubuntu
id: '8'
categories:
  - [Guides]
date: 2020-04-27 13:56:00
authorId: adnan
thumbnail: install-lazarus-ubuntu-20-04/lazarus-install-ubuntu-thumb.png
---

Ubuntu 20.04 LTS has been released recently, but installing Lazarus there from the official repos won't get you up and running. Let's see how Lazarus can be installed on 20.04 without issues.
<!-- more -->


You can install Lazarus from Ubuntu Software. But wait till you see it burp a surprize error message!

Apparantly the package for Lazarus available from Ubuntu Software, the official Ubuntu "software center", shows a "Can't find the lazarus executable /usr/lib/lazarus/2.0.6/lazarus" message on startup. The bug has been [reported](https://bugs.freepascal.org/view.php?id=36572) and will probably be fixed in future, but at the time of writing this, it was broken. So you'll need a guide to install it properly. Let me show you how you can install Lazarus on your Ubuntu 20.04 LTS installation without any hassle.

Don't worry, I have made this easy for anyone to follow. So come along!

There is even a video available to make things easier for you...




**Note**: If you don't have the issue above and you are satisfied with 1 or 2 version old package that you get from official repos, ignore this guide and stick to the version from Ubuntu Software.


### Step 0: Completely Remove Previous Lazarus Installs

Open **Ubuntu Software** from Activities overview. Search for "**lazarus**" and remove if any package is installed.

Even after removing the packages, there might be some other packages or residual files from previous installs. So we remove all of those with:

```bash
sudo sh -c "apt autoremove fpc lazarus lazarus-ide
lazarus-ide-2.0 lazarus-project fpc-source &&
rm -Rf /usr/lib/fpc &&
rm -Rf /usr/lib/lazarus &&
rm -Rf /usr/share/fpcsrc &&
rm -Rf /etc/lazarus &&
rm -rf /etc/fpc.\* &&
rm -rf /etc/fpc-\* &&
rm -rf /etc/fppkg\* &&
rm -f ~/.fpc &&
rm -Rf ~/.lazarus"
```

Run above on the Terminal app. (Open Activities overview, search "term", launch **Terminal** app, then copy and paste the command in and press enter.)

_\* You may need to provide your user password of the system when you run sudo commands._



### Step 1: Update Your System

First update your system. You can use the **Software Updater** tool by launching it from Activities overview or run this on the Terminal app:

```bash
sudo apt update && sudo apt upgrade
```

_\* You may need to provide your user password of the system when you run sudo commands or add/remove software._

An update and upgrade is needed so that the dependencies we will be installing in a minute does not conflict with the currently installed versions. Please do not skip this, otherwise you will have dependency issues when installing later.



### Step 2: Get the DEB Files

Download the deb files for Lazarus from [https://lazarus-ide.org](https://lazarus-ide.org/)

(It should automatically detect your system architecture and offer you the appropriate files.)

You will need to download all the 3 deb files for `lazarus-project`, `fpc-src` and `fpc-laz`.

Now put the deb files in a separate directory. Only keep those 3 deb files in that folder and nothing else. This is because we'll run a magic command later.



### Step 3: Install Them

Before installing, it is a good practice to uninstall the previous version of Lazarus to get a problem-free installation. If you have a previous version of Lazarus installed, uninstall it using Step 0 instructions shown above. If you don't have it installed, follow along...

Open the terminal on the directory with the 3 deb files. (Click the folder name on the top location bar and choose **Open in Terminal**.) Then run:

```bash
sudo apt install binutils libgtk2.0-dev
```

This will install all the dependencies for Lazarus. Then this to install Lazarus:

```bash
sudo dpkg -i *
```

This is the magic command I was talking about. It will install all 3 of those DEB files.



### Step 4: After Installing

After the installation finished, you can run it from the Activities overview. You can go there and then search for "**lazarus**" and it should show up. It will launch when you click the icon.

After it launched, you will see a dialog box titled **Welcome to Lazarus IDE**. If it doesn't show any red icons you are fine. You can click **Start IDE** on that dialog box. This will make Lazarus appear on screen.

You can right click the Lazarus icon on Dash and select **Add to Favorites** to add the icon on Dash for you to later access it from there.



### Bottom Line

You will be able to install Lazarus without any problems. But there is a caveat. It will not automatically update with your system. Since you've manually installed this, you'll have to manually update this yourself. Updating is easy though. Just download the deb files, keep them in a folder, then run `sudo dpkg -i *` on that folder and you're done!

Although I would recommend switching to the Ubuntu Software version when this issue is fixed.

**Note:** If system upgrades trying to replace deb versions to repo versions on your system, you may need to hold the packages to their current version. (Thanks to Tony for pointing this out.) You may need to run `sudo sh -c "apt-mark hold lazarus-project && apt-mark hold fpc-src && apt-mark hold fpc-laz"`. If you want to revert this back, run the command with "unhold" instead of "hold". Details [here](https://askubuntu.com/a/18656).
