<?php namespace App\Repos;

use Carbon\Carbon;

class DigitalWinRepo
{
    public function __construct()
    {
        $this->api_base_url = config('services.digitalwin.base_url');
        $this->api_key = config('services.digitalwin.api_key');
        $this->api_id = config('services.digitalwin.api_id');
        $this->api_agent_id = config('services.digitalwin.agent_id');
        $this->current_date = Carbon::now();
    }

    /**
     * GameToken(AutomaticRegistration)
     *
     * @param int $player_id
     * @param int $game_id
     *
     * @return string
     */
    public function GetGameTokenNR($player_id, $game_id)
    {
        $data = "<GameRequest>
                    <RequestType>GetGameTokenNR</RequestType>
                    <WebCallID>$this->api_id</WebCallID>
                    <WebCallKey>$this->api_key</WebCallKey>
                    <AgentID>$this->api_agent_id</AgentID>
                    <PlayerID>$player_id</PlayerID>
                    <GameID>$game_id</GameID>
                    <ReqDateTime>$this->current_date</ReqDateTime>
                </GameRequest>";


    }

    /**
     * Convert xlm to json
     *
     * @param xlm $xlm
     *
     * @return json
     */
    private function filterXLM($xlm)
    {
        return json_decode(json_encode(simplexml_load_string($xlm)), true);
    }
}
