# php-clean-architecture-attachments

| Solution | Pros ✅ | Cons ❌ |
|----------|--------|---------|
| **1. Domain holds path** | + Simple, direct 🟢 | – The domain *knows* about infrastructure (paths/URLs), making storage changes costly 🔴 |
| **2. Domain holds ID** | + Domain decoupled, infra decides the “where” 🟢 | – Requires a resolver/service to translate ID into path 🔴 |
| **3. Domain holds Value Object** | + Expressive, can capture semantics (type, mime, rules) 🟢 | – More verbose, slightly heavier 🔴 |
| **4. Storage service abstraction** | + Pure domain, infra fully swappable (Local, S3, etc.), highly testable 🟢 | – Requires extra interfaces and abstractions 🔴 |
