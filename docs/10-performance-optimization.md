# Performance Optimization Strategy: PT Nusantara Digital

## Core Web Vitals Focus
- **LCP (Largest Contentful Paint):** We optimize this by prioritizing the hero image loading (using `fetchpriority="high"`) and minimizing render-blocking CSS.
- **FCP (First Contentful Paint):** We optimize this by disabling WordPress Emojis and deferring JS.
- **CLS (Cumulative Layout Shift):** We ensure all `<img>` tags have explicit `width` and `height` attributes to reserve space before the image loads.
- **INP (Interaction to Next Paint):** We defer non-critical JavaScript to keep the main thread free.

## Technical Implementation
- Removed WordPress Core Emoji scripts.
- Implemented `defer` attributes on custom JS (`header.js`).
- Caching Layer: We will implement LiteSpeed Cache on the production server for Page Caching, Object Caching, and automated WebP image delivery.
