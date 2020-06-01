@extends('template.index')

@section('festivals')
    <div class="container festival-list">
        <div class="justify-content-right text-right">
            <i class="fas fa-search"></i><input type="text" class="justify-content-left" id="search" name="search" placeholder="Search for festivals..." [formControl]="search"
                autofocus />
        </div>
        <div class="justify-content-right text-right">
        {{-- <button id="btn2" class="btn btn-primary" *ngIf="authService.isLoggedIn" (click)="authService.logout()">Logout</button> --}}
        </div>
        <div class="container" style="margin-top: 15px;">
            <div class="row row-cols-1 row-cols-md-4">
                @foreach($festivals as $festival)
                    <div class="card">
                        <img src="{{$festival->img}}" class="card-img-top" alt="{{$festival->name}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$festival->name}}</h5>
                            <p class="card-text">{{$festival->country}}</p>
                            <p class="card-text"><small class="text-muted">{{$festival->city}}</small></p>

                            <!-- Button trigger modal -->
                            <button class="btn btn-info" (click)="setSelected(festival)" data-toggle="modal"
                                data-target="#staticBackdrop">
                                Details</button><button class="btn btn-info nav-item nav-link" *ngIf="!showAddFavorite" routerLink="/login">Favorite</button>
                            <button class="btn btn-info" (click)="addFav(festival.id)" *ngIf="showAddFavorite">
                                Favorite
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- <!-- Modal -->
            <div *ngIf="selected">
                <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">{{selected.name}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <h3>{{selected.country}}</h3>
                                <h4>{{selected.city}}</h4>
                                <p>Festival homepage: <a href="{{selected.URL}}" target="_blank"> {{selected.name}}</a></p>
                                <p>Date: from {{selected.from}}
                                    {{selected.til}}</p>

                                <p> Genre: {{selected.music}} </p>
                                <p><i class="fas fa-calendar-day"></i> Dayticket: {{selected.dayticket}}</p>
                                <p><i class="fas fa-calendar-week"></i> Weekendticket: {{selected.wknd}}</p>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
