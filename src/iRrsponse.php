<?php

interface iResponse { 
    public function asJson(): string;
    public function asArray(): array;
}