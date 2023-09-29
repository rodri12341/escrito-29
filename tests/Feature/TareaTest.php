<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TareaTest extends TestCase
{
    private $idtarea=1;

    public function test_listarTareas()
    {
        $response = $this->get('api/v1/escrito29/tarea');
    
        $response->assertStatus(200);
    }

    public function test_listarUnaTarea()
    {
        $response = $this->post('api/v1/escrito29/tarea' . $this->idtarea);
    
        $response->assertStatus(200);
    }

    public function test_eliminarTarea()
    {
        $response = $this->delete('api/v1/escrito29/tarea' . $this->idtarea);
    
        $response->assertStatus(200);
    }
}
