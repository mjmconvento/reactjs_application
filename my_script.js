    var CommentBox = React.createClass({
        loadCommentsFromServer: function() {
            $.ajax({
                url: this.props.url,
                dataType: 'json',
                cache: false,
                success: function(data) {
                    this.setState({data: data});
                }.bind(this),
                error: function(xhr, status, err) {
                    console.error(this.props.url, status, err.toString());
                }.bind(this)
            });
        },
        handleCommentSubmit: function(comment){
            var comments = this.state.data;
            comment.id = Date.now();
            var newComments = comments.concat([comment]);
            this.setState({data: newComments});
            $.ajax({
                url: this.props.url,
                dataType: 'json',
                type: 'POST',
                data: comment,
                success: function(data) {
                    this.setState({data: data});
                }.bind(this),
                error: function(xhr, status, err) {
                    console.error(this.props.url, status, err.toString());
                }.bind(this)
            });
        },
        getInitialState: function() {
            return {data: []};
        },
        componentDidMount: function() {
            this.loadCommentsFromServer();
            setInterval(this.loadCommentsFromServer, this.props.pollInterval);
        },
        render: function() {
            return (
                <div className="commentBox">
                    <br/>

                    <h2 className="text-primary">Comments</h2>
                    <div className="col-md-12">
                        <div className="col-md-4 col-sm-12 col-xs-12">
                            <br/>    
                            <CommentForm onCommentSubmit={this.handleCommentSubmit} />
                        </div>

                        <div className="col-md-8 col-sm-12 col-xs-12">
                            <br/>    
                            <CommentList data={this.state.data} />
                        </div>
                    </div>
                </div>
            );
        }
    });

    var CommentList = React.createClass({
        render: function() {
            var commentNodes = this.props.data.map(function(comment){
                return (
                    <Comment author={comment.author} post_date={comment.post_date} key={comment.id}>
                        {comment.comment_text}
                    </Comment>
                );
            });

            return (
                <div className="commentList">
                    { commentNodes }
                </div>
            );
        }
    });

    var Comment = React.createClass({
        render: function() {
            var datePosted = new Date(this.props.post_date),
                dateNow = new Date(),
                dateInterval = Math.ceil((dateNow.getTime() - datePosted.getTime()) / 1000),
                monthList = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October",
                "November", "December" ]; 
                
                if(dateInterval >= 60 && dateInterval < 3600)
                {
                    dateInterval = Math.round(dateInterval/60);
                    if (dateInterval == 1)
                    {
                        dateInterval = "a few moments ago";
                    }
                    else
                    {
                        dateInterval += " minutes ago";
                    }
                }
                else if(dateInterval >= 3600 && dateInterval < 86400)
                {
                    dateInterval = Math.round(dateInterval/3600);
                    dateInterval += ( dateInterval == 1 ? " hour ago" : " hours ago" );
                }
                else 
                {
                    dateInterval = monthList[datePosted.getMonth()] + " " + datePosted.getDate() + ", " + datePosted.getFullYear();
                    dateInterval += " " + datePosted.getHours() + ":" + datePosted.getMinutes() + ":" + datePosted.getSeconds();
                }


                return (
                <div className="comment">

                    <blockquote className="blockquote-reverse">
                        <p>{ this.props.children }</p>
                        <footer>
                            { this.props.author }
                        </footer>

                        <h5>
                            <i>
                                <strong>Posted : </strong>
                                { dateInterval }
                            </i>
                        </h5>

                    </blockquote>
                </div>
            );
        }
    });

    var CommentForm = React.createClass({
        getInitialState: function(){
            return { author: '', text:'' };
        },
        handleAuthorChange: function(e){
            this.setState({author: e.target.value});
        },
        handleTextChange: function(e){
            this.setState({text: e.target.value});
        },
        handleSubmit: function(e){
            e.preventDefault();
            this.props.onCommentSubmit({author: this.state.author, text: this.state.text});
            this.setState({author: '', text: ''});
        },
        render: function() {
            return (
                <div className="commentForm">
                    <form onSubmit={this.handleSubmit}>
                        <div className="form-group">
                            <label>Name:</label>
                            <input type="text" className="form-control input-sm" placeholder="input name here.." 
                                value={this.state.author} onChange={this.handleAuthorChange} required />
                        </div>
                        
                        <div className="form-group">
                            <label>Comment:</label>
                            <textarea className="form-control input-sm" rows="5" placeholder="input comment here.." 
                                value={this.state.text} onChange={this.handleTextChange} required ></textarea>
                        </div>

                        <input className="btn btn-primary pull-right" type="submit" value="Post" />
                    </form>
                </div>
            );
        }
    });

    ReactDOM.render(<CommentBox url="post_data.php" pollInterval={5000}  />, document.getElementById('content'));


    $(document).ready(function(){
        $('[data-toggle="popover"]').popover(); 
    });

    $("#show_more_btn").click(function(){
        var show_more_btn_text = $(this).text();
        $(this).text(
            show_more_btn_text == "See more..." ? "Hide" : "See more..."
        );
    });