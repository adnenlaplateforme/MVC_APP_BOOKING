<?php

function booking_index()
{
    $data = [
        'title' => 'Liste de réservations',
        'message' => '',
        'days' => getCurrentWeek(),
        'allbooking' => formatBookings(getAllBooking())
    ];
    load_view_with_layout('booking/index', $data);
}

function booking_add()
{
    $data = [
        'title' => "Ajouter une réservation"
    ];
    if (is_post()) {
        $title = clean_input(post('title'));
        $description = clean_input(post('description'));
        $time_start = clean_input(post('time_start'));
        $time_end = clean_input(post('time_end'));
        $date = clean_input(post('date'));
        $csrf_token = post('csrf_token');

        if (!isset($csrf_token) || $csrf_token !== $_SESSION['csrf_token']) {
            set_flash('error', 'Formulaire invalide ou expiré.');
            redirect('auth/register');
            exit;
        }
        // Validation
        if (empty($title) || empty($description) || empty($time_start) || empty($time_end) || empty($date)) {
            set_flash('error', 'Tous les champs sont obligatoires.');
        } else {
            // AJouter une réservation
            $date_start =  format_datetime($date, $time_start);
            $date_end = format_datetime($date, $time_end);
            $id_user = $_SESSION['user_id'];
            $booking_id = insertBooking($title, $description, $date_start, $date_end, $id_user);
            if ($booking_id) {
                $msg = 'Réservation réussie !';
                set_flash('success', $msg);
                error_logging(ErrorType::Info, $msg);
            } else {
                $msg = "Erreur lors de l'ajout de réservation !";
                set_flash("error", $msg);
                error_logging(ErrorType::Error, $msg);
            }
        }
    }
    load_view_with_layout('booking/add', $data);
}

function booking_details()
{
    $data = [
        'title' => 'Détails de la réservation'
    ];
    load_view_with_layout('booking/details', $data);
}
