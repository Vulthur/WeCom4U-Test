<template>
    <section class="container" id="comments">
        <div id="comments-title" class="row font-title" >
            <div class="col-md-12">
                Comments
            </div>
        </div>
        <div id="comments-list">
            <div class="row comment">
                <div class="col-xs-1">
                    <img class="comments-icon no-padding " src="/images/Julie.png" alt="icon user julie">
                </div>
                <div class="col-xs-11 comment-content">
                    <p class="comment-name">Julie</p>
                    <p class="comment-text font-text-big">A wonderfull hike with a great vue !!</p>
                </div>
            </div>
            <div class="row comment">
                <div class="col-xs-1">
                    <img class="comments-icon no-padding" src="/images/Edward.png" alt="icon user edward">
                </div>
                <div class="col-xs-11 comment-content">
                    <p class="comment-name">Edward</p>
                    <p class="comment-text font-text-big">Wow ! What a hike !? Don’t miss this hike omg omg omg !!</p>
                </div>
            </div>
        </div>
    </section>
</template>

<style lang="scss" scoped>
    @import '~@/_variables.scss';

    #comments {
        background-color: $white;
    }

    #comments-list{
        padding-top: 32px;
    }

    #comments-title {
        padding-top: 82px;
    }
    
    .comment {
        padding-top: 24px;
    }

    .comment-content{ 
        margin-top: -8px;
        padding-left: 22px;
        max-width: 80%;
    }

    .comment-name {
        color: $grey-dark;
        font-size: 18px;
        font-weight: bold;
        letter-spacing: 0.45px;
        line-height: 36px;
        margin-bottom: -4px;
    }

    .comment-text {
        color: $grey-dark;
    }

    .comments-icon {
        height: 46px;
        width: 46px;
        margin-left: 22px;
    }

     @media (max-width: $breakpoint-smartphone) {
        .comment-text {
            font-size: 17px;
        }

    }
</style>

<script>
    export default {
        props: {
        },
    }
</script>