<?php
/*
  * Récupérer une réservation par son ID 
*/
function getBookingById($id)
{
    $query = "SELECT bookings.*, users.name, users.email
            FROM bookings
            JOIN users ON bookings.id_user = users.id
            WHERE bookings.id = ?";
    return db_select_one($query, [$id]);
}

/*
 * Récupérer toutes les réservations
 */
function getAllBooking($limit = null, $offset = 0)
{
    $query = "SELECT bookings.*, users.name
            FROM bookings
            JOIN users 
            WHERE bookings.id_user = users.id";
    if ($limit != null) {
        $query .= " LIMIT $offset, $limit";
    }
    return db_select($query);
}

/*
 *  Vérifier la disponibilité d'un créneau
*/

function verify_disponibility($date_start, $date_end)
{
    $query = "SELECT COUNT(*) AS conflit 
              FROM bookings 
              WHERE date_start < ? AND date_end > ?";
    $result = db_select_one($query, [$date_end, $date_start]);
    return $result['conflit'] > 0;
}

/*
 * Créer une réservation
*/
function insertBooking($title, $description, $start, $end, $id_user)
{
    try {
        //code...
    } catch (Exception $e) {
    }
}
