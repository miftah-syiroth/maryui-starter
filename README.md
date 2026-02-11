# 🚀 Laravel 12 Application

Aplikasi berbasis Laravel 12 dengan arsitektur modern, menggunakan PostgreSQL sebagai database utama dan Redis untuk sistem queue.  
Frontend dibangun menggunakan Livewire 4 dan TailwindCSS 4 dengan komponen UI dari MaryUI serta PowerGrid untuk datatable interaktif.

---

## 🧱 Technology Stack

### Backend
- PHP 8.4
- Laravel 12
- PostgreSQL 17
- Redis
- Laravel Horizon (Queue Monitoring)
- Spatie Activity Log (Audit Logging)
- Spatie Permission (Role & Permission Management)
- Laravel Schemaless Attributes (Flexible JSON Attributes)

### Frontend
- Livewire 4
- TailwindCSS 4
- MaryUI
- PowerGrid (Livewire DataTable)

---

## 📦 System Requirements

### Server Requirements
- PHP ≥ 8.4
- Composer ≥ 2.x
- PostgreSQL ≥ 17
- Redis ≥ 7
- Node.js ≥ 20
- NPM ≥ 10

### PHP Extensions
- BCMath
- Ctype
- Fileinfo
- JSON
- Mbstring
- OpenSSL
- PDO
- pdo_pgsql
- Tokenizer
- XML
- Redis (phpredis)

---

## 🔥 Core Features

- Role & permission management berbasis RBAC
- Activity logging (audit trail)
- Queue system berbasis Redis
- Monitoring queue dengan Horizon
- Dynamic schemaless attributes (JSON column)
- Reactive UI dengan Livewire
- Utility-first styling dengan TailwindCSS
- Modern UI components via MaryUI
- Advanced datatable dengan PowerGrid

---

## 🗄 Database

Database utama menggunakan PostgreSQL 17 dengan dukungan:

- JSON/JSONB column (untuk schemaless attributes)
- Indexing & performance optimization
- Transaction support
- Foreign key constraints

---

## 📊 Queue & Monitoring

- Queue driver: Redis
- Worker management via Horizon
- Real-time monitoring dashboard
- Retry & failed job handling

---

## 📄 License

MIT License
