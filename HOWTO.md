---
---

## Getting Started

### Prerequisites

To work with this blog locally, ensure you have:

- **Ruby** (2.7.0+): `ruby --version`
- **Jekyll** (3.9.0+): `gem install jekyll bundler`
- **Git**: Version control for managing changes

## Installation and Setup

### Local Development

1. **Clone the repository:**
   ```bash
   git clone https://github.com/SunandanAdhikary/SunandanAdhikary.github.io.git
   cd SunandanAdhikary.github.io
   ```

2. **Install dependencies:**
   ```bash
   bundle install
   ```

3. **Run the development server:**
   ```bash
   bundle exec jekyll serve
   ```
   Access the blog at `http://localhost:4000`

### Creating Blog Posts

1. **Create a new file in `_posts/` with the naming convention:**
   - Format: `YYYY-MM-DD-post-title.md`
   - Example: `2026-04-05-state-space-models.md`

2. **Add front matter (YAML metadata):**
   ```yaml
   ---
   layout: post
   title: "Your Blog Post Title"
   date: 2026-04-05
   categories: blog
   author: "Sunandan Adhikary"
   ---
   ```

3. **Write your content in Markdown:**
   - Use `#`, `##`, `###` for headings
   - Use `**text**` for bold, `*text*` for italic
   - Use ` ``` ` for code blocks
   - Use `[link text](url)` for links

### MathJax / LaTeX Support

To use mathematical equations in your posts:

1. **Add to front matter:**
   ```yaml
   mathjax: true
   ```

2. **Use LaTeX syntax:**
   - Inline math: `$equation$`
   - Display math: `$$equation$$`
   - Example: `$$E = mc^2$$`

### Publishing Changes

1. **Commit and push your changes:**
   ```bash
   git add .
   git commit -m "Add new blog post"
   git push origin main
   ```

2. **GitHub Pages automatically deploys** to `https://sunandanadhikary.github.io`

---

## Features

 - supports dark mode on macOS Mojave
 - optional sidebar
 - MathJax support
 - no external ressources
 - included archive page
 - supports pagination
 - feed generation
 - responsive
 - syntax highlighting
 - supports comments via [disqus](https://disqus.com/) or [isso](http://posativ.org/isso/)

## Based on

- [Hyde](https://github.com/poole/hyde)
- [Minima](https://github.com/jekyll/minima)
- [Lagrange](https://github.com/LeNPaul/Lagrange)
- [Font Awesome](http://fontawesome.io/)
- [KaTeX](https://katex.org/)
- [Pygments](https://github.com/richleland/pygments-css)

## Installation (jekyll-remote-theme method)

You can use this theme with the `jekyll-remote-theme` plugin. Just create an empty repo, copy over the `index.html` file and add this to your `_config.yml`:

```yaml
remote_theme: niklasbuschmann/contrast@v2.11

plugins:
  - jekyll-remote-theme
```

Note: to enable icons you also need to copy over the `_data` folder.

## Config

Your `_config.yml` could for example look like this:

```yaml
title: "Blog Title"
author: "Blog Author"
description: "My personal blog about ... something"
permalink: /:title/
lang: "en"
excerpt_separator: "\n\n\n"
date_format: "%B %d, %Y"

# Layout

show_excerpts: true        # show article excerpts on the home page
show_frame: true           # adds a gray frame to the site
show_sidebar: false        # show a sidebar instead of the usual header

# Menu

navigation:                # accepts {file, title, url, icon, sidebaricon}
  - {file: "index.html"}
  - {file: "README.md"}

external:                  # shows a footer with social links - for available icons see fontawesome.com/icons
  - {title: Mail, icon: envelope, url: "mailto:niklasbuschmann@users.noreply.github.com"}
  - {title: Github, icon: github, url: "https://github.com/niklasbuschmann/contrast"}
  - {title: Subscribe, icon: rss, url: "/feed.xml"}

comments:
#  disqus_shortname: ""    # see https://disqus.com/
#  isso_domain: ""         # see https://posativ.org/isso/

plugins:
 - jekyll-feed

```

## License

[public domain](http://unlicense.org/)

You’ll find this post in your `_posts` directory. Go ahead and edit it and re-build the site to see your changes. You can rebuild the site in many different ways, but the most common way is to run `jekyll serve`, which launches a web server and auto-regenerates your site when a file is updated.


To add new posts, simply add a file in the `_posts` directory that follows the convention `YYYY-MM-DD-name-of-post.ext` and includes the necessary front matter. Take a look at the source for this post to get an idea about how it works.

Jekyll also offers powerful support for code snippets:

{% highlight ruby %}
def print_hi(name)
  puts "Hi, #{name}"
end
print_hi('Tom')
#=> prints 'Hi, Tom' to STDOUT.
{% endhighlight %}

Check out the [Jekyll docs][jekyll-docs] for more info on how to get the most out of Jekyll. File all bugs/feature requests at [Jekyll’s GitHub repo][jekyll-gh]. If you have questions, you can ask them on [Jekyll Talk][jekyll-talk].

[jekyll-docs]: http://jekyllrb.com/docs/home
[jekyll-gh]:   https://github.com/jekyll/jekyll
[jekyll-talk]: https://talk.jekyllrb.com/
