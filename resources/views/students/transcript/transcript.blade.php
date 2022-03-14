<div class="instruction">
    <h4>Instructions</h4>
    <ol>
        <li>Fill part A and B of this form and present to the Dean of your school.</li>
        <li>
            Where a PROXY is collecting the transcript, a letter of authorization from
             the claimant and original ID will be required
        </li>
    </ol>
</div>
<div class="trf">
    <center>
        <form action="{{ route('t.pply') }}" method="POST" enctype="multipart/form-data">
            <div class="rq">
                <p>Request</p>
                <p>a) Provisional <input type="radio" name="request" id="request" value="provisional"></p>
                <p>
                    b) Academic <input type="radio" name="request" id="request" value="'academic">
                </p>
            </div>
            <div class="ay">
                <p>Academic year</p>
                <p>1 <input type="checkbox" name="ay" id="ay" value="1"></p>
                <p>2 <input type="checkbox" name="ay" id="ay" value="2"></p>
                <p>3 <input type="checkbox" name="ay" id="ay" value="3"></p>
                <p>4 <input type="checkbox" name="ay" id="ay" value="4"></p>
            </div>
        </form>
    </center>
</div>