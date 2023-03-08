<?php
interface Personnel {
    const ANCIENNETE_MIN = 5;
    const ANCIENNETE_MAX =20;

    public function getNom();
    public function getAnciennete();
    public function getIndice();
    public function calculerSalaire();
}
?>