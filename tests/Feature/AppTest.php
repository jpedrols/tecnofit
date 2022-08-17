<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;

use function PHPUnit\Framework\assertEquals;

class AppTest extends TestCase
{
    /**
     *
     * @return void
     */

    use RefreshDatabase;

    protected $seed = true;

    public function test_api_retorna_ok()
    {
        $response = $this->get('/api/rank_por_movimento/1');

        $response->assertStatus(200);
    }

    public function test_valida_o_primeiro_no_rank_conforme_seed(): void
    {
        $response = $this->get('/api/rank_por_movimento/1');

        /** @var array */
        $result = (array) $response->json();
        $response->assertStatus(200);

        assertEquals('Jose', $result[0]['user_name']);
        assertEquals(190, $result[0]['value']);
    }

    public function test_rota_retorna_not_found_ao_enviar_id_nao_existente(): void
    {
        $response = $this->get('/api/rank_por_movimento/215544');
        $response->assertStatus(Response::HTTP_NOT_FOUND);
    }

    public function test_rota_retorna_not_found_quando_nao_envia_id(): void
    {
        $response = $this->get('/api/rank_por_movimento/');
        $response->assertStatus(404);
    }
}
