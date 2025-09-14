# AssistForWCAG Laravel Package

This package allows you to quickly integrate the Assist for WCAG accessibility widget into your Laravel application. Using environment variables for configuration, you can generate the necessary JavaScript snippet and insert it anywhere on your site with a Blade directive (`@assistForWCAG`) or directly in PHP.

Features:
- Easy setup with environment variables
- Blade directive for simple insertion

## Installation

### 1. Require package in your  `composer.json`:
```
composer require dockcodes/assistforwcag
```

### 2. Publish config:
```php
php artisan vendor:publish --provider="Dock\AssistForWCAG\DockServiceProvider" --tag="config"
```

### 3. Set up token
Register, generate a token and insert it in the configuration file.

[Get free token here.](https://wcag.dock.codes/my-account/tokens/)

Add to .env file:
```dotenv
ASSIST_FOR_WCAG_TOKEN="[Enter token here]"
```

# How to display accessibility widget
```bladehtml
<body>
  @assistForWCAG
</body>
```