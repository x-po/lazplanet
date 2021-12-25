# LazPlanet Lazarus Blog

![Build Status](https://gitlab.com/pages/hexo/badges/master/build.svg)

_This is an effort to bring the old LazPlanet [blog](https://lazplanet.blogspot.com) into Hexo. **Note:** This is still work in progress._

<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->
<!-- If you've changed this README.md file, especially any of its headings run `doctoc README.md` -->
**Table of Contents**  *generated with [DocToc](https://github.com/thlorenz/doctoc)*

- [About LazPlanet](#about-lazplanet)
- [Running locally](#running-locally)
- [Technical aspects](#technical-aspects)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->


## About LazPlanet

LazPlanet is a blog full of interesting DIY projects, source codes and ideas that can be created in Lazarus IDE. In this blog you can find everything from a talking clock to a simple word processor or even a basic web browser that you can create in 3 minutes! LazPlanet is here since 2013 and is a great resource for beginners who want to start their programming journey in Lazarus or Free Pascal.


## Running locally

To work locally with this project, you'll have to follow the steps below:

1. Fork, clone or download this project
1. [Install](https://hexo.io/docs/#Installation) Hexo globally: `npm install -g hexo-cli`
1. Install dependencies: `npm install`
1. Add/edit content (optional)
1. Generate your site: `hexo generate`
1. Preview your site: `hexo server`

Read more at Hexo's [documentation][https://hexo.io/docs].


## Technical aspects

The blog is mainly made in Hexo (Node.js based static site generator) and the content is converted from the original platform into WordPress then converted into Hexo (as markdown). The conversion process is roughly described [here](https://notabug.org/adnan360/blogger-to-hexo). Currently the content is as is, after the conversion (so WIP). But this project is designed in such a way that it can be hosted in GitLab/GitHub pages or any [simple server](https://www.npmjs.com/package/simple-server) that is able to serve static files.

As the site is static, the comments are not. So they had to be kept somewhere that dynamic languages are supported. [HashOver](https://www.barkdull.org/software/hashover) is a great project that lets anyone host their own comments and also supports [converting WordPress comments](https://github.com/kepon85/wp2hashover) into it.

The search feature is implemented through [StaticSearcher](https://gitlab.com/adnan360/static-searcher) hosted on __adnan360.com__.

## License

Please see the [`LICENSE.md`](https://gitlab.com/lazplanet/lazplanet.gitlab.io/-/blob/master/LICENSE.md) file.
