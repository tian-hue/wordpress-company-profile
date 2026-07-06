# QA Documentation: Functional Testing

## Overview
Functional testing ensures that the PT Nusantara Digital website operates according to the Software Requirements Specification (SRS). We validate that every user interaction on the frontend and every content management capability on the backend functions exactly as designed.

## Functional Test Cases

| Test ID | Feature | Description | Preconditions | Steps | Expected Result | Actual Result | Status | Priority | Severity |
|---------|---------|-------------|---------------|-------|-----------------|---------------|--------|----------|----------|
| FT-001 | Header | Sticky navigation trigger | User is on Homepage (Desktop) | 1. Scroll down 20px | Header shadow appears, header sticks to top of viewport | *Pending* | `[ ]` | High | High |
| FT-002 | Mobile Nav | Hamburger menu toggle | Mobile viewport (< 768px) | 1. Click hamburger icon | Menu expands smoothly downward, `aria-expanded` becomes true | *Pending* | `[ ]` | High | High |
| FT-003 | CMS Services | Add new service | Logged in as Administrator | 1. Go to Services > Add New 2. Enter details 3. Publish | New Service routes correctly to frontend URL (`/services/...`) | *Pending* | `[ ]` | Critical | Critical |
| FT-004 | CMS Customizer| Update Contact Email | Logged in as Administrator | 1. Go to Appearance > Customize 2. Change email 3. Publish | Frontend UI updates globally across header/footer | *Pending* | `[ ]` | Medium | Medium |
| FT-005 | Routing | 404 Page rendering | Browser open | 1. Navigate to `/does-not-exist` | Custom 404.php template loads, Search form is functional | *Pending* | `[ ]` | Low | Low |

*(Note: In a production environment, this list would map to JIRA tickets and cover every single interactive element on the site.)*
