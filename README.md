## [My Website and Blog](https://sunandanadhikary.github.io/)

This repository contains my personal portfolio website, academic profile, and technical blog built with Jekyll and GitHub Pages.

---

## 📑 Documentation

- **[GITHUB_PROFILE_README.md](GITHUB_PROFILE_README.md)** - Comprehensive GitHub profile biography with research details, publications, and achievements. You can use this in your GitHub profile repository.
- **[REPOSITORY_GUIDE.md](REPOSITORY_GUIDE.md)** - Complete guide to repository structure, features, and customization.
- **[HOWTO.md](HOWTO.md)** - Setup instructions and development guide for running this blog locally.
- **[CLEANUP_GUIDE.md](CLEANUP_GUIDE.md)** - List of unnecessary files that can be safely removed.

---

## 🚀 Quick Start

### Prerequisites
- Ruby 2.7.0 or higher
- Jekyll 3.9.0 or higher
- Bundler

### Local Development
```bash
git clone https://github.com/SunandanAdhikary/SunandanAdhikary.github.io.git
cd SunandanAdhikary.github.io
bundle install
bundle exec jekyll serve
```

Visit `http://localhost:4000` to see your site.

---

## 🎨 Features

- ✨ **Dark/Light Mode** - Automatic with toggle button
- 📱 **Responsive Design** - Mobile, tablet, and desktop optimized
- 🔬 **Academic Portfolio** - Research areas, publications, and CV
- 📝 **Blog Platform** - Technical articles with category support
- 🧮 **Math Support** - LaTeX equations via KaTeX
- 🎯 **Interactive Tabs** - Research, Academics, and Work Experience sections
- 🌍 **No External Dependencies** - All resources self-hosted

---

## 📂 Repository Structure

```
├── index.md                    # Homepage with profile & research
├── _posts/                     # Blog articles
├── _layouts/ & _includes/      # Page templates
├── _sass/                      # Stylesheets
├── assets/                     # Images, fonts, icons
├── GITHUB_PROFILE_README.md    # GitHub profile bio
├── REPOSITORY_GUIDE.md         # Repo structure & features
├── HOWTO.md                    # Development guide
└── CLEANUP_GUIDE.md            # Cleanup instructions
```

See [REPOSITORY_GUIDE.md](REPOSITORY_GUIDE.md) for detailed structure.

---

## ✍️ Writing Blog Posts

1. Create `_posts/YYYY-MM-DD-title.md`
2. Add front matter:
   ```yaml
   ---
   layout: post
   title: "Your Title"
   date: YYYY-MM-DD
   categories: blog
   author: "Sunandan Adhikary"
   ---
   ```
3. Write content in Markdown
4. Commit and push to GitHub (auto-deploys!)

See [HOWTO.md](HOWTO.md) for detailed instructions.

---

## 🗑️ Cleanup

To remove unnecessary files from the repository, see [CLEANUP_GUIDE.md](CLEANUP_GUIDE.md).

Files to remove:
- `index-copy.html`, `index-copy.md` (backup files)
- `rewrite_index.py` (development script)
- `.travis.yml` (CI configuration)

---

## 📊 Profile Content

This site includes:
- **About Me** - Personal bio and research interests
- **Research** - PhD research summary and focus areas
- **Publications** - 8+ recent publications from Google Scholar
- **Education** - PhD (ongoing), MS, B.Tech degrees
- **Work Experience** - TA, Research Consultant, System Engineer roles
- **Skills** - Programming languages, tools, frameworks
- **Blog** - Technical articles on CPS, formal methods, AI

---

## 🔗 Links

- **Website:** https://sunandanadhikary.github.io/
- **Google Scholar:** https://scholar.google.com/citations?hl=en&user=VsnaXGoAAAAJ
- **LinkedIn:** https://www.linkedin.com/in/sunandan-adhikary
- **Email:** mesunandan@gmail.com

---

## 📄 License

This repository is released into the **public domain** under the [UNLICENSE](UNLICENSE.txt).