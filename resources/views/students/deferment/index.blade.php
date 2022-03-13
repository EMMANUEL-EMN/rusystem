<div class="instructons">
    <h3>INSTRUCTIONS</h3>
    <ol>
        <li>
            This form is intended for use by students who wish to
             defer either their studies or examinations. Requests for deferral are not
            automatically granted but are decided on a case by case basis.
        </li>
        <li>
            Supportive documents must be attached to each application. 
            The application will not be processed without supporting
            documentation.
        </li>
        <li>
            If approved, deferred exams are re-scheduled as special examinations
        </li>
    </ol>
</div>
@if (session()->has('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="df_form">
    <form action="{{ route('d.apply') }}" method="POST" enctype="multipart/form-data">
        @method('post')
        @csrf
        <div class="pd">
            <div class="d-flex justify-content-around">
                <div class="p-2">
                    <p>Year of Study</p>
                    <select name="yos" id="yos">
                        <option value="1.1">1.1</option>
                        <option value="1.2">1.2</option>
                        <option value="2.1">2.1</option>
                        <option value="2.2">2.2</option>
                        <option value="3.1">3.1</option>
                        <option value="3.2">3.2</option>
                        <option value="4.1">4.1</option>
                        <option value="4.2">4.2</option>
                    </select>
                </div>
                <div class="p-2">
                    <p>Academic Year</p>
                    <p>
                        <input type="text" name="ay" id="ay">
                    </p>
                </div>
                <div class="p-2">
                    <p>Semester</p>
                    <p>
                        <select name="semester" id="semester">
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </p>
                </div>
            </div>
            <div class="nature">
                <h5>NATURE OF DEFERMENT</h5>
                <div class="d-flex justify-content-around">
                    <div class="p-2">
                        <p>a) Studies</p>
                        <p>
                            <input type="radio" name="nature" id="nature" value="studies">
                        </p>
                    </div>
                    <div class="p-2">
                        <p>b) Education</p>
                        <p><input type="radio" name="nature" id="nature" value="education"></p>
                    </div>
                </div>
                <div class="natureDetails">
                    <p>Period</p>
                    <p>
                        <input type="number" name="period" id="period">
                    </p>
                    <p>Course code(s) (for exams option)</p>
                    <p>
                        <textarea name="codes" id="codes" cols="70" rows="4"></textarea>
                    </p>
                    <p>Start date of Exams</p>
                    <p>
                        <input type="date" name="sdate" id="sdate">
                    </p>
                </div>
                <div class="reason">
                    <p>Reason for deferment</p>
                    <p>
                        <textarea name="reason" id="reason" cols="70" rows="5"></textarea>
                    </p>
                </div>
            </div>
            <div class="bt">
                <button class="btn btn-success">SUBMIT</button>
            </div>
        </div>
    </form>
</div>
<div class="info">
    <h3>REASONS FOR DEFERMENT</h3>
    <p>
        Students may apply for a deferment of examination, if they are not 
        able to attend an examination on a particular date(s) on the grounds of
        illness, accident, temporary disability, sporting or cultural commitments at 
        a state or national level, bereavement, compassionate
        circumstances and financial. An application for deferred examination 
        is only applicable where the assessment item or examination has NOT
        BEEN attempted.
    </p>
    <p>
        <h5>IMPORTANT NOTE:</h5>
        Applications may be rejected if there is reason to believe that a student 
        is seeking to achieve an unfair advantage
        through deferred assessment. This judgment may be based on the particular 
        circumstances of the application together with the student’s
        academic record and history of deferred examination applications.
    </p>
    <h4>DOCUMENTARY EVIDENCE</h4>
    <p>
        Applying for a Deferment of Examination on medical grounds
        Students applying for deferred assessment on medical grounds must 
        submit a medical certificate, completed by a registered medical or
        dental practitioner stating:
    </p>
    <p>
        <ul>
            <li>
                The date on which the practitioner examined the student, the severity 
                and duration of the complaint and the practitioner’s opinion of the
                effect of the complaint on the student’s ability to undertake the 
                assessment item.
                Please note that in all cases the certificate must contain the Medical 
                Practitioner’s stamp where indicated, or, the Medical Practitioner’s
                contact details.
                Students are advised to keep a photocopy of the completed original 
                Certificate for their records.
            </li>
        </ul>
        <p>
            <h5>Applying for a Deferment of Examination on Compassionate Grounds</h5>
            Compassionate grounds might include
            <ul>
                <li>
                    Death of a family member or close relative, Serious illness of
                     a family member or close relative and involvement in an accident 
                     where this
                    does not involve injury (if injured a medical certificate would 
                    be appropriate)
                    Appropriate documentary evidence for compassionate grounds might 
                    include: Bereavement notice, copy of accident report
                   <h5> Applying for a Deferment of Examination on Financial Grounds: </h5>
                    Failure to raise requisite fee for the semester
                    Appropriate documentary evidence for financial grounds 
                    might include:
                </li>
                <li>
                    A duly signed clearance form by the Finance Officer indicating
                     the fee balance, course registration form, duly signed.
                </li>
            </ul>
        </p>
    </p>
</div>