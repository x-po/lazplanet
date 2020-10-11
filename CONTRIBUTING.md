# Contributing

## Downloads

There are downloads related to articles. Each tutorial article usually have the tutorial project source code. This is available as download. In the old blog the same project source code was uploaded to multiple places in case something goes wrong. It was written in HTML which was manually inserted by hand.

To streamline all these links and the text this is what was implemented in Hexo version:

```
downloads:
  - https://www.example.com/somefile-1.zip
  - https://gitlab.com/lazplanet/some-project/-/releases
```

Alternative example with objects:

```
downloads:
  - title: 'Windows 32-bit'
    url: https://example.com/somefile32.zip
  - title: 'Windows 64-bit'
    url: https://example.com/somefile64.zip
  - https://gitlab.com/lazplanet/some-project/-/releases
```

`downloads` in front-matter is optional. When it's found, it will look for items inside it. `downloads` is an array. And each array item can be either just a string containing download url, or an object having both a caption and url for the download (see the `title` and `url` example above). Mixing string and object under the same `downloads` entry is supported, but not recommended.

If `downloads` is added on front-matter, remove the old text related to downloads to avoid repetition.
