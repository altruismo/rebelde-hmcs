# Rebelde HMCS

**Rebelde HMCS** is designed for hosting providers seeking an open-source alternative to legacy billing platforms like WHMCS.

It is a minimal yet powerful tool to manage clients, billing, and notifications in the hosting business. Built with **Laravel**, with a clean and open architecture from day one.

This project was born with a clear goal: to help small and medium hosting providers break free from WHMCS-like without sacrificing reliability or control.

---

## ✊ Philosophy

- **Freedom**: Your code, your rules.  
- **Simplicity**: Just what you need. Nothing more.  
- **Autonomy**: Run it where you want. Scale it when you need.  
- **Community**: Open and accessible for developers worldwide.

---

## 🚀 v1.0 Features

Rebelde HMCS aims to provide a minimalist yet complete alternative to WHMCS-like software, starting with the core features necessary to keep your hosting or digital service business running smoothly.

### 🧾 Core Admin Tools
- Customer management (create, edit, suspend, delete)
- Order and service tracking
- Manual and automatic invoice generation
- Payment reminders and overdue notices
- Basic tax handling (VAT, flat tax)

### 🛍️ Public Shopping Flow
- Public service catalog (no login required)
- Cart system to collect desired services
- Login or register during checkout
- Automatic order creation upon confirmation

### 📚 Knowledge Base
- Public articles grouped by categories
- Markdown/HTML support for content
- Friendly URLs and basic search

### 📬 Notifications
- Email templates for invoices, support, and system messages
- Queued email sending for performance

### 👤 Customer Portal
- View orders, invoices and services
- Make payments via configured gateways
- Submit and view support tickets

### 🌐 Public Frontend / Landing Website

**Rebelde HMCS** includes an optional public-facing section that serves as an institutional website or landing page. This part of the system is designed to welcome visitors, present services, and facilitate initial contact with potential clients. It can be implemented as a simple landing page or as a more complete multipage website, depending on the provider’s needs.

#### Key Features:
- Customizable homepage
- Sections for services, pricing plans, and key features
- Contact forms and call-to-action elements
- Modern design powered by Blade and Bootstrap (Tailwind CSS likely in the future)
- Smooth, responsive navigation
- Built-in support for basic SEO practices
- Ready for extra content such as FAQs, testimonials, or articles

This section is fully editable and can be integrated with dynamic components of the system or kept static, depending on the project's approach. Leveraging Laravel's Blade templating engine, developers can craft modular and maintainable layouts through partial views and intuitive component structures—without the complexity of advanced features like slots. The default design embraces a minimalist and modern aesthetic that aligns with the platform's visual identity, while remaining easy to extend or customize as needed. Static pages are served through clean, human-friendly routes and can be managed via dedicated controllers, ensuring both clarity in code structure and flexibility in content delivery.

---

## 🛠️ Tech Stack

- Laravel 12
- Blade or Livewire (TBD)
- MySQL / MariaDB (SQLite supported out of the box)
- Bootstrap 5 (or TailwindCSS in future releases)

---

## 📦 Installation (coming soon)

Installation instructions will be available after the first stable commit.

---

## 🧭 Future Roadmap

- Integration with server APIs (DirectAdmin, Plesk, cPanel®)
- Full-featured client portal (multi-level permissions, billing history)
- Multi-currency support
- Built-in payment gateways (Stripe, PayPal, Flow.cl, Transbank)
- Modular system for plugins/extensions

---

> **Rebelde HMCS** is not just software.  
> It's a mindset.  
> It's the belief that we can build better.

---

## ⚖️ Disclaimer

Rebelde HMCS is an independent open-source project and is **not affiliated with, endorsed by, or sponsored by WHMCS Ltd.**  
“WHMCS” is a registered trademark of WHMCS Ltd., used here solely for descriptive and comparative purposes.

