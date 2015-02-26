<?php /**
    * (desde[, hasta])
    *
    * Devuelve la diferencia textual entre dos fechas.
    */
function between($past = '', $now = '')
{
    $past = is_string($past)? strtotime($past): (int) $past;
    $now = is_string($now)? strtotime($now): (int) $now;
    $now = $now <= 0? time(): $now;// --

    // restamos..
    $diff = $now - $past;

    if ($diff < 60)
    {
        return 'menos de un minuto';
    }
    else
    {
        if ($diff < 120)
        {
            return 'hace un minuto';
        }
        else
        {
            if ($diff < (60 *60))
            {
                return 'hace ' . ($diff /60) . ' minutos';
            }
            else
            {
                if ($diff < (120 *60))
                {
                    return 'hace una hora';
                }
                else
                {
                    if ($diff < (24 *60 *60))
                    {
                        return 'hace ' . ($diff /3600) . ' horas';
                    }
                    else
                    {
                        if ($diff < (48 *60 *60))
                        {
                            return 'hace un dia';
                        }
                        else
                        {
                            return 'hace ' . ($diff /86400) . ' dias';
                        }
                    }
                }
            }
        }
    }
}  
?>
