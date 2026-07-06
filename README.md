<div align="center">
  
  # PT Nusantara Digital
  
  **Enterprise-Grade WordPress Corporate Platform**
  
  [![WordPress](https://img.shields.io/badge/WordPress-6.x-21759b?style=for-the-badge&logo=wordpress&logoColor=white)](https://wordpress.org/)
  [![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net/)
  [![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
  [![License](https://img.shields.io/badge/License-MIT-blue.svg?style=for-the-badge)](LICENSE)
  
  A high-performance, monolithic CMS architecture designed for a leading technology partner and software house.

</div>

---

## 📖 Overview
PT Nusantara Digital is a bespoke, production-ready corporate platform built on WordPress. Moving away from bloated commercial themes, this project utilizes a custom-engineered presentation layer to achieve exceptional Core Web Vitals, maximum security, and a seamless authoring experience via the WordPress REST API and Gutenberg Block Editor.

## ✨ Features
- **Dynamic Services Management:** Custom Post Types and Hierarchical Taxonomies for categorizing business offerings.
- **Enterprise UI/UX:** Glassmorphism headers, sticky navigation, and high-contrast accessibility-compliant typography.
- **Core Web Vitals Optimized:** Zero render-blocking JavaScript in the `<head>`, deferred script loading, and disabled legacy core assets (e.g., Emojis).
- **Theme Customizer Integration:** Global business data (Contact, Socials, Hours) abstracted into the `wp_options` table via the `WP_Customize_Manager` API.
- **Semantic Routing:** Custom WordPress template hierarchy (`front-page.php`, `archive.php`, `404.php`) ensuring SEO-friendly HTML5 delivery.

## 🏗 Architecture
The application utilizes a strict separation of concerns within the monolithic WordPress environment:
- **Presentation Layer:** Custom Theme (`nusantara/`) handling HTML5, CSS3 (BEM), and ES6 modules.
- **Content Layer:** MySQL 8.0 structured via the WP REST API.
- **Functionality Layer:** Custom Post Types abstracted into dedicated `/inc` modules.

## 💻 Tech Stack
- **Backend:** PHP 8.2, WordPress Core 6.x
- **Frontend:** HTML5, Vanilla CSS3, Vanilla JS (ES6)
- **Database:** MySQL 8.0
- **Server:** NGINX / LiteSpeed (Production)
- **DevOps:** LocalWP (Development), GitHub (VCS)

## 🚀 Installation

### Prerequisites
- [LocalWP](https://localwp.com/) installed on your machine.
- Git.

### Setup Instructions
1. Clone the repository into your LocalWP `wp-content` directory:
   ```bash
   git clone https://github.com/tian-hue/wordpress-company-profile.git nusantara
   ```
2. In LocalWP, ensure the environment is running **PHP 8.2+** and **NGINX**.
3. Log into the WordPress Admin dashboard (`/wp-admin`).
4. Navigate to **Appearance > Themes** and activate the **PT Nusantara Digital** theme.
5. Navigate to **Settings > Permalinks** and click **Save Changes** to flush the rewrite rules for the Services Custom Post Type.

## 📂 Folder Structure
```text
wordpress-company-profile/
├── .github/           # CI/CD Workflows
├── docs/              # QA, Architecture, and DevOps Documentation
├── planning/          # SRS, Business Overview, Wireframes
├── design/            # UI/UX Brand Identity and Tokens
├── wp-content/        
│   └── themes/
│       └── nusantara/
│           ├── assets/       # CSS and JS modules
│           ├── inc/          # CPTs, Customizer, and Performance Logic
│           ├── functions.php # Core Theme Bootstrapper
│           └── style.css     # Theme Metadata
└── README.md
```

## 📸 Screenshots
*(Coming Soon - Awaiting Production Deployment)*

## 🌐 Live Demo
*(Coming Soon - Awaiting Production Deployment)*

## 📚 Documentation
- [Project Architecture](./docs/01-project-architecture.md)
- [Performance Strategy](./docs/10-performance-optimization.md)
- [QA & Functional Testing](./docs/11-functional-testing.md)
- [Hosting Strategy](./docs/12-hosting-strategy.md)

## 🔄 Development Workflow
We adhere to strict Conventional Commits and a feature-branching Git strategy. All PHP code must pass WordPress Coding Standards (WPCS).

## ☁️ Deployment
Production deployment targets a Managed Cloud instance (Cloudways/DigitalOcean) utilizing Redis Object Cache and NGINX edge caching.

## 🗺 Roadmap
- [x] Theme Foundation
- [x] Dynamic Business Features (CPTs)
- [x] Performance & Web Vitals Optimization
- [ ] Portfolio Custom Post Type Integration
- [ ] CI/CD Pipeline via GitHub Actions

## 📄 License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🙏 Acknowledgements
Inspired by the design systems and engineering documentation of Vercel, Stripe, and Microsoft.

## 👤 Author
**Christian**
- GitHub: [@tian-hue](https://github.com/tian-hue)
