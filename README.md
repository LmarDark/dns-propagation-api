# 🌐 DNS Tools API

API RESTful para consulta de registros DNS de diversos tipos, como A, MX, CNAME, NS, TXT e AAAA.

---

## 📌 Visão Geral

A **DNS Tools API** permite consultar, em tempo real, os registros DNS de um domínio, retornando os dados diretamente do servidor DNS (sem cache). Cada tipo de registro possui um endpoint dedicado, acessível via requisições `POST`.

> **Requisitos:** O servidor deve ter suporte à função PHP `dns_get_record`.

---

## 🛣️ Endpoints

Todos os endpoints aceitam requisições `POST` com um corpo JSON contendo o campo `domain`.

| Tipo de Registro | Endpoint                      | Descrição                       |
|------------------|-------------------------------|---------------------------------|
| A                | `/api/dns-lookup/a`           | Retorna registros A (IPv4)      |
| MX               | `/api/dns-lookup/mx`          | Retorna registros MX (Mail Exchange) |
| CNAME            | `/api/dns-lookup/cname`       | Retorna registros CNAME         |
| NS               | `/api/dns-lookup/ns`          | Retorna registros NS (Name Server) |
| TXT              | `/api/dns-lookup/txt`         | Retorna registros TXT           |
| AAAA             | `/api/dns-lookup/aaaa`        | Retorna registros AAAA (IPv6)   |

---

## 📤 Requisição

### 🔸 Formato
```json
{
    "domain": "exemplo.com"
}
```
- `domain` (string, obrigatório): Domínio a ser consultado.

---

## ✅ Respostas

### 🔹 Sucesso (200 OK)
```json
[
    {
        "type": "A",
        "ip": "93.184.216.34"
    },
    ...
]
```

### 🔹 Sem resultados (204 ou 200 com mensagem)
```json
{
"message": "No results"
}
```
---

## 🧪 Exemplo de Requisição via `curl`

```
curl -X POST http://localhost:8000/api/dns-lookup/a
-H "Content-Type: application/json"
-d '{"domain": "exemplo.com"}'
```
---

## ⚙️ Tecnologias Utilizadas

- **Framework:** Laravel (PHP)
- **Função PHP:** `dns_get_record` (utilizada para realizar as consultas DNS)

---

## ❗ Observações

- Os dados retornados são consultados diretamente dos servidores DNS no momento da requisição.
- A API **não utiliza cache**, garantindo dados sempre atualizados.
- Certifique-se de que o domínio informado seja válido e existente.

---

## 📄 Licença

Este projeto está licenciado sob a [MIT License](./LICENSE).
