# Playground Theme Development Project

This project contains a custom WordPress block theme and a WP Playground blueprint for rapid testing.

## Project Structure

- `theme/`: The custom WordPress theme source files.
  - `style.css`: Theme header and metadata.
  - `theme.json`: Configuration for fonts, colors, and layout.
  - `templates/`: Block templates (index, single, page, etc.).
  - `parts/`: Template parts (header, footer, etc.).
  - `patterns/`: Reusable block patterns.
- `blueprint.json`: Configuration for WP Playground to automate setup.

## Remote Sharing

You can share a "Live Preview" of this theme with others using the updated `blueprint.json`.

### 1. Push to GitHub
Upload your project to a GitHub repository (e.g., `https://github.com/YOUR_USER/YOUR_REPO`).

### 2. Update Placeholders
In `blueprint.json`, update the following variables inside the `runPHP` step:
- `$user = 'YOUR_USER';`
- `$repo = 'YOUR_REPO';`

### 3. Share the Link
Once the file is on GitHub, anyone can preview the theme by clicking a link in this format:

```text
https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/YOUR_USER/YOUR_REPO/main/blueprint.json
```

## Local Development
To run the server locally and mount your files (no GitHub needed):

```bash
npm start
```

## Building a Shareable Snapshot
To create a single ZIP file containing the entire site:

```bash
npm run build:snapshot
```
