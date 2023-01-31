@extends('layouts.app')
@section('title','How to Play')
@section('content')
    <main>
        <section class="innerpages">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center">
                        <h2 class="page-title">
                            How To Play </h2>
                    </div>
                    <div class="how_to_play_ss">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="howTocolumn">
                                    <ul>
                                        <li>
                                            <div class="image"><img src="{{asset('img/how_to_play_1.png')}}" alt="" class="img-fluid"></div>
                                            <div class="text new-add-how">
                                                <h3 class="pt-5">Select a Match</h3>
                                                <p>Choose the match you want to play and show-off your skills.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="image"><img src="{{asset('img/how_to_play_2.png')}}" alt="" class="img-fluid"></div>
                                            <div class="text">
                                                <h3 class="pt-5">SELECT YOUR PLAYING XI</h3>
                                                <p>Create your own team by selecting different players within a defined virtual credit points.
                                                </p>
                                                <p></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="image"><img src="{{asset('img/how_to_play_3.png')}}" alt="" class="img-fluid"></div>
                                            <div class="text new-add-how">
                                                <h3>CHOOSE YOUR CAPTAIN &amp; VICE CAPTAIN</h3>
                                                <p>Once you choose your playing 11 it’s time to choose your captain &amp; vice-captain that will
                                                    help you earn extra points.</p>
                                                <p>2x points for the Captain &amp; 1.5x points for the Vice-Captain based on their on-field
                                                    performance.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="image"><img src="{{asset('img/how_to_play_4.png')}}" alt="" class="img-fluid"></div>
                                            <div class="text">
                                                <h3  class="pt-5">ONE LEAGUE, MULTIPLE TEAMS</h3>
                                                <p>Increase your winning chances with Multiple Entries. Join a “Multiple Entry” League with a
                                                    maximum of 15 different teams<sup><a href="{{url('terms-condition')}}">T&amp;C
                                                            Apply</a></sup>.</p>
                                                <p></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="image"><img src="{{asset('img/how_to_play_5.png')}}" alt="" class="img-fluid"></div>
                                            <div class="text new-add-how">
                                                <h3>BECOME A PART OF A LEAGUE</h3>
                                                <p>With your playing XI join a league or contest organized by FANTASYBATLE to compete with other
                                                    users or compete with your friends through a private league created by you or your friends.
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </section>
    </main>
@endsection

