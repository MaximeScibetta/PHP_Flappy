<?php
    function jsonencode($something)
    {
        return json_encode($something, JSON_UNESCAPED_UNICODE);
    }