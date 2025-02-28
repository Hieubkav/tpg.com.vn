@extends('layouts.shop')

@section('content')
    @include('component.storeFront.hero')
    @include('component.storeFront.partnerCarousel')
    @include('component.storeFront.aboutMe')
    @include('component.storeFront.myProject')
    @include('component.storeFront.detailProject')
    @include('component.storeFront.aboutUs')
    @include('component.storeFront.review')
    @include('component.storeFront.stat')
    @include('component.storeFront.trust')
    @include('component.storeFront.stackUp')
    @include('component.storeFront.blog')
    {{--@include('component.storeFront.service')
    @include('component.storeFront.contact')
    @include('component.storeFront.profile') --}}
@endsection
