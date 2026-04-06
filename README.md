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
Upload your project to your GitHub repository: `https://github.com/Agressiva86/playground-test`.

### 2. Update Placeholders
I have updated the variables inside the `runPHP` step in `blueprint.json` for you:
- `$user = 'Agressiva86';`
- `$repo = 'playground-test';`

### 3. Share the Link
Anyone can preview your theme live by clicking this link:

[**Live Preview in WordPress Playground**](https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/Agressiva86/playground-test/main/blueprint.json)

```text
https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/Agressiva86/playground-test/main/blueprint.json
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
