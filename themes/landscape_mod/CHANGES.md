# Changes

Changes applied to `landscape` theme:

- Add navigation links. Changes: `_config.yml`
- Added post thumbnail feature with the help of `thumbnail` front-matter variable. Changes: `layout/_partial/article.ejs`, `source/css/_partial/article.styl`
- Changed the Hexo default text on footer. Changes: `layout/_partial/footer.ejs`
- Added Hashover comments. Changes: `layout/_partial/head.ejs`, `layout/_partial/footer.ejs`, `layout/_partial/article.ejs`, `source/css/_partial/article.styl`
- Modified search form to work with custom domain. Changes: `layout/_partial/header.ejs`
- Added author feature with [`hexo-multiauthor`](https://github.com/bob983/hexo-multiauthor). Changes: `layout/_partial/post/title.ejs`
- Removed code which links Source Code Pro from Google (`fonts.googleapis.com/css?family=Source+Code+Pro`)
- ~Changed jquery url that was going to Google (`ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js`)~ No longer needed, since 0.0.3 uses local version
- Added related posts. Changes: `layout/_partial/article.ejs`, `source/css/_partial/article.styl`
- Added favicon as `source/favicon.png`
