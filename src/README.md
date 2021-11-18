# Challenge - Laravel API with Vue.js
A continuación está detallado los métodos que se utilizan en el API.
## Retornar todos los vuelos
```
GET /api/vuelos
200 [{ id, name, destination, origin, departure_date, arrival_date, created_at, updated_at }]
```
## Retornar el detalle de un vuelo específico
```
GET /api/vuelos
200 { id, flight_id, price, airline, number_scales, duration_hours, created_at, updated_at }
```