# Repository Cleanup Guide

This document lists unnecessary files that can be safely removed from the repository.

## Deprecated Files (Safe to Delete)

### Build & Cache Files
- `.sass-cache/` - SASS compilation cache (regenerates automatically)
- `_site/` - Jekyll build output directory (regenerates on `jekyll build`)

### Unnecessary Backup Files
- `index-copy.html` - Backup copy of index.html (no longer needed)
- `index-copy.md` - Backup copy of index.md (no longer needed)

### Development Scripts
- `rewrite_index.py` - Python script for one-time index rewriting (no longer used)

### CI/CD Configuration
- `.travis.yml` - Travis CI configuration (GitHub Pages auto-deploys without it)

## Essential Files to Keep

### Core Website Files
- `index.md` - Homepage/portfolio content
- `_config.yml` - Jekyll configuration
- `_layouts/` - Jekyll page templates
- `_includes/` - Reusable HTML components
- `_sass/` - Stylesheets
- `_posts/` - Blog posts
- `_data/` - Data files (icons.json)
- `assets/` - Images, fonts, JavaScript

### Configuration Files
- `.gitignore` - Git ignore rules
- `Gemfile` - Ruby dependencies
- `Gemfile.lock` - Locked dependency versions

### Documentation
- `README.md` - Repository overview
- `HOWTO.md` - Setup and development instructions
- `GITHUB_PROFILE_README.md` - GitHub profile bio (for profile repo)

### License
- `UNLICENSE.txt` - Public domain license

## Cleanup Commands

To remove unnecessary files, run:

```bash
# Remove cache directories
rm -rf .sass-cache/
rm -rf _site/

# Remove backup files
rm -f index-copy.html
rm -f index-copy.md

# Remove development scripts
rm -f rewrite_index.py

# Remove CI configuration
rm -f .travis.yml
```

Or use Git to remove them from version control:

```bash
git rm -r .sass-cache/
git rm -r _site/
git rm -f index-copy.html index-copy.md rewrite_index.py .travis.yml
git commit -m "Remove deprecated and unnecessary files"
git push origin main
```

## Additional Notes

- `.gitignore` should be updated to prevent `.sass-cache/` and `_site/` from being committed
- `citations.csv` - Keep for future reference or data analysis
- `404.html` - Custom 404 page for GitHub Pages (useful to keep)
