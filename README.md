# Playground Patterns Plugin Development Project

This project contains a custom WordPress plugin with block patterns and a WP Playground blueprint for rapid testing.

## Project Structure

- `plugin/`: The custom WordPress plugin source files.
  - `playground-patterns.php`: Main plugin file with pattern registration.
  - `patterns/`: Reusable block patterns.
- `theme/`: Legacy theme files (no longer used).
- `blueprint.json`: Configuration for WP Playground to automate setup.

## Automated Releases

Every push to the `main` branch automatically creates a new GitHub Release and updates the `latest` tag with a fresh `plugin.zip`. This zip contains only the `plugin/` directory and is used by the WordPress Playground blueprint.

### How it works
1. **GitHub Action**: `.github/workflows/release.yml` triggers on push.
2. **Zip Creation**: The `plugin/` folder is zipped into `plugin.zip`.
3. **Release Update**: A new versioned release (e.g., `v1`, `v2`) is created, and the `latest` release is updated with the new `plugin.zip`.

## Remote Sharing

You can share a "Live Preview" of this patterns plugin with others using the simplified `blueprint.json`.

### 1. Push to GitHub
Upload your project to your GitHub repository: `https://github.com/Agressiva86/playground-test`.

### 2. Share the Link
Anyone can preview your patterns plugin live by clicking this link:

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
