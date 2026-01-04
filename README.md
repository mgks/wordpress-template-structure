# WordPress Template Structure (2025 Edition)

A lightweight, modern starter theme for WordPress developers. This skeleton is built on **2025 standards**, combining the flexibility of Classic PHP templates with the power of `theme.json`.

Designed to be bloat-free, it utilizes the WordPress Template Hierarchy to reduce file count while maintaining full functionality.

## Features

*   **Hybrid Classic Structure**: Traditional PHP templating paired with `theme.json` for modern block editor control.
*   **Zero Bloat**: Redundant files (like `category.php`, `tag.php`, `attachment.php`) are removed in favor of a robust `archive.php` fallback.
*   **Modern Organization**: Assets live in `assets/` and partials in `template-parts/`.
*   **Developer Ready**: Includes standard `.gitignore` exclusions and a `FUNDING.yml`.

## Directory Structure

```text
├── .github/             # GitHub funding configurations
├── assets/              # CSS, JS, and Images
├── inc/                 # Custom PHP functions & template tags
├── languages/           # Translation files (.pot)
├── page-templates/      # Custom page layouts (e.g., Full Width)
├── template-parts/      # Reusable components (Header, Footer, Content)
├── 404.php              # Error page
├── archive.php          # Universal handler for Cats, Tags, Dates, & Authors
├── footer.php           # Footer component
├── front-page.php       # Static Homepage template
├── functions.php        # Theme setup & Enqueue
├── header.php           # Header component
├── index.php            # Main fallback template
├── page.php             # Single Page template
├── search.php           # Search results
├── single.php           # Single Post template
├── style.css            # Theme declaration
└── theme.json           # Global settings (Colors, Layout, Typography)
```

## Installation

1.  **Clone or Download**:
    ```bash
    git clone https://github.com/mgks/wordpress-template-structure.git wp-content/themes/my-theme
    ```
2.  **Activate**:
    Go to your WordPress Dashboard > **Appearance** > **Themes** and activate the theme.

## Configuration

### Styles & Scripts
*   **Global Settings**: Edit `theme.json` to control typography, color palettes, and layout widths. This is the modern replacement for many `add_theme_support` calls.
*   **CSS**: Main styles are located in `assets/css/main.css`.
*   **Theme Info**: Update the theme name and author details in `style.css`.

### Template Parts
We follow the DRY (Don't Repeat Yourself) principle.
*   `header.php` and `footer.php` load the outer shell.
*   The Loop content is handled via `get_template_part( 'template-parts/content', ... )`.

## License

[MIT](LICENSE) / GPL-2.0-or-later
