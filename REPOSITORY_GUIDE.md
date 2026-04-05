# Portfolio Website Repository Structure

## 📋 Overview

This repository contains:
1. **Personal Portfolio Website** - Deployed to GitHub Pages at https://sunandanadhikary.github.io/
2. **Blog** - Technical articles on CPS, formal methods, and AI
3. **Academic Profile Dashboard** - Interactive tabs for research, academics, and work experience

---

## 📁 Directory Structure

```
SunandanAdhikary.github.io/
├── index.md                          # Homepage with profile & research
├── blogs.html                         # Blog listing page
├── archive.html                       # Blog archive
├── 404.html                           # Custom 404 page
├── _config.yml                        # Jekyll configuration
│
├── _layouts/                          # Page templates
│   ├── default.html                   # Main layout with dark mode support
│   ├── post.html                      # Blog post template
│   └── page.html                      # Static page template
│
├── _includes/                         # Reusable components
│   ├── menu.html                      # Navigation menu
│   ├── sidebar.html                   # Optional sidebar
│   ├── home.html                      # Homepage specific markup
│   ├── archive.html                   # Archive page content
│   ├── embed.html                     # Embedded content helpers
│   └── meta.html                      # Metadata & SEO
│
├── _sass/                             # SASS stylesheets
│   ├── index.sass                     # Color variables & functions
│   ├── basic.sass                     # Core styles & responsive design
│   ├── layout.sass                    # Layout structure
│   ├── classes.sass                   # Utility classes
│   └── font.sass                      # Font definitions
│
├── _posts/                            # Blog articles
│   ├── 2021-12-06-markdown-examples.md
│   └── 2026-04-05-state-space-models-hybrid-future.md
│
├── assets/                            # Static assets
│   ├── images/                        # Profile photo, etc.
│   ├── css/                           # Compiled CSS
│   ├── fonts/                         # FontAwesome, other fonts
│   ├── fontawesome/                   # FontAwesome icons
│   ├── katex/                         # Math rendering library
│   ├── academicons/                   # Academic icons
│   └── pdfs/                          # Downloadable pdfs
│
├── _data/                             # Data files
│   └── font-awesome/icons.json        # Icon mappings
│
├── Gemfile & Gemfile.lock             # Ruby dependencies
├── citations.csv                      # Publication data
│
└── Documentation
    ├── README.md                      # (This file)
    ├── HOWTO.md                       # Setup & development guide
    ├── GITHUB_PROFILE_README.md       # GitHub profile bio template
    ├── CLEANUP_GUIDE.md               # Files to remove
    ├── HOWTO.md                       # Detailed setup instructions
    └── UNLICENSE.txt                  # Public domain license
```

---

## 🎯 Files Added/Updated in This Session

### New Files
- **GITHUB_PROFILE_README.md** - Comprehensive GitHub profile biography with research details, publications, and contact info

### Updated Files
- **CLEANUP_GUIDE.md** - Guide for removing unnecessary files from the repository
- **.gitignore** - Updated to exclude deprecated files

---

## 🗑️ Files to Remove

The following files can be safely deleted from the repository:

```
index-copy.html          # Backup copy (no longer needed)
index-copy.md            # Backup copy (no longer needed)
rewrite_index.py         # Development script (one-time use)
.travis.yml              # Travis CI config (not needed for GitHub Pages)
.sass-cache/             # Build cache (regenerates automatically)
_site/                   # Build output (regenerates on jekyll build)
```

**See CLEANUP_GUIDE.md for detailed removal instructions.**

---

## 🚀 Quick Start

### Prerequisites
- Ruby 2.7.0+
- Jekyll 3.9.0+
- Bundler

### Local Development
```bash
# Install dependencies
bundle install

# Start development server
bundle exec jekyll serve

# Visit http://localhost:4000
```

### Create a Blog Post
```bash
# Create new file in _posts/
touch _posts/YYYY-MM-DD-your-title.md

# Add front matter
---
layout: post
title: "Your Title"
date: YYYY-MM-DD
categories: blog
author: "Sunandan Adhikary"
---

# Write content in Markdown
```

### Deploy Changes
```bash
git add .
git commit -m "Your message"
git push origin main
# GitHub Pages auto-deploys!
```

---

## 🎨 Customization

### Colors
Edit `_sass/index.sass` to change colors:
- `$light` - Light mode background
- `$dark` - Dark mode background
- `$link-color` - Link color (peach)

### Dark Mode
Automatically enabled based on system preference. Users can toggle in the header.

### Responsiveness
- Desktop: Full layout
- Tablet (≤768px): Tab menu converts to hamburger
- Mobile: Optimized touch targets

---

## 📊 Features

✅ **Dark/Light Mode** - Auto-switching with localStorage persistence  
✅ **Responsive Design** - Works on all device sizes  
✅ **Mathematical Equations** - KaTeX support for LaTeX equations  
✅ **Glasomorphism Effects** - Modern UI with backdrop blur  
✅ **Semantic Color Coding** - Green headers, peach metadata  
✅ **Expandable Sections** - PhD summary with click-to-expand  
✅ **Icon Integration** - FontAwesome icons throughout  
✅ **Blog with Archives** - Full blogging platform  
✅ **Publication Highlighting** - Author names highlighted  
✅ **Tab Interface** - Research, Academics, Work tabs  

---

## 📚 Blog Setup

Blog can be managed through Jekyll:
- Articles stored in `_posts/` with `YYYY-MM-DD-title.md` format
- Automatic archive generation
- Category support
- Auto-linking in header

For detailed blogging setup, see HOWTO.md.

---

## 🔗 External Links

- **Website:** https://sunandanadhikary.github.io/
- **Google Scholar:** https://scholar.google.com/citations?hl=en&user=VsnaXGoAAAAJ
- **LinkedIn:** https://www.linkedin.com/in/sunandan-adhikary
- **GitHub:** https://github.com/SunandanAdhikary

---

## 📄 License

This repository is released into the **public domain** under the UNLICENSE.

---

## 📝 Notes

This is a GitHub Pages website with Jekyll static site generation. It serves as both:
1. An academic portfolio and biography
2. A personal blog for technical articles
3. A showcase of research and publications

All files are optimized for GitHub Pages deployment with no external dependencies (all resources are self-hosted).

For setup and development details, see **HOWTO.md**.  
For GitHub profile README usage, see **GITHUB_PROFILE_README.md**.  
For repository cleanup, see **CLEANUP_GUIDE.md**.
