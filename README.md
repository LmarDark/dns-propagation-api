# DNS Tools API

API para consulta de registros DNS de diversos tipos.

## Endpoints

Todos os endpoints aceitam requisições `POST` com JSON contendo o campo `domain`.

### 1. Consultar registro A
`POST /api/dns-lookup/a`
Retorna os registros do tipo A (IPv4).

### 2. Consultar registro MX
`POST /api/dns-lookup/mx`
Retorna os registros do tipo MX (Mail Exchange).

### 3. Consultar registro CNAME
`POST /api/dns-lookup/cname`
Retorna os registros do tipo CNAME (Canonical Name).

### 4. Consultar registro NS
`POST /api/dns-lookup/ns`
Retorna os registros do tipo NS (Name Server).

### 5. Consultar registro TXT
`POST /api/dns-lookup/txt`
Retorna os registros do tipo TXT.

### 6. Consultar registro AAAA
`POST /api/dns-lookup/aaaa`
Retorna os registros do tipo AAAA (IPv6).

---

## Parâmetros da Requisição

```json
{
	"domain": "exemplo.com"
}
```

- `domain` (string, obrigatório): Domínio a ser consultado.

## Respostas

- **Sucesso:** Array de registros DNS encontrados.
- **Sem resultados:**  
	```json
	{ "message": "No results" }
	```

## Exemplo de Requisição

```bash
curl -X POST http://localhost:8000/api/dns-lookup/a \
		 -H "Content-Type: application/json" \
		 -d '{"domain": "exemplo.com"}'
```


## Informações Adicionais

- Esta API foi desenvolvida utilizando o framework Laravel.
- Para utilizar, é necessário que o servidor tenha suporte à função `dns_get_record` do PHP.
- Os endpoints retornam os dados diretamente do DNS consultado, sem cache.
